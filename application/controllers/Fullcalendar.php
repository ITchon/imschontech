<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fullcalendar extends CI_Controller {

     private $upload_path = "./uploads";

 public function __construct()
 {
  parent::__construct();
  $this->load->model('fullcalendar_model');
  $this->load->library('upload');
 }

//  function index()
//  {

//   $this->load->view('student/calen_css');
//   $this->load->view('student/fullcalendar');

//  }

 function load()
 {
  $std_id =  $this->session->userdata('std_id');
  $event_data = $this->fullcalendar_model->fetch_all_event($std_id);
  foreach($event_data->result_array() as $row)
  {
   $data[] = array(
    'id' => $row['id'],
    'title' => $row['title'],
    'description' => $row['description'],
    'color' => $row['color'],
    'start' => $row['start_event'],
    'end' => $row['end_event']

   );
  }
  echo json_encode($data);
 }

 public function upload(){

     $config["upload_path"]   = $this->upload_path;
     $config["allowed_types"] = "*";
     $config['overwrite'] = TRUE;
     // $config['encrypt_name'] = TRUE;

      if($_FILES != null){
        $file = array(
          'file' => $_FILES['file']['name']
        );
      }else{
        $file = array(
          'file' => ''
        );
      }

     if ( ! empty($_FILES)) 
   {
      $this->load->library('upload', $config);
      $this->upload->initialize($config);
      if ( ! $this->upload->do_upload("file")) {
        echo "failed to upload file(s)";
      }else{
       $uploaded = $this->upload->data();
       $code = array('filename'  => $uploaded['file_name']);
       foreach($code as $c){
         $this->session->set_userdata('filecode', $c);
       }
      }
    }
    echo json_encode($file);
    

   

 }
 


 function insert()
 {
   $title =$this->input->post('title');
   $des = $this->input->post('description');
   $color = $this->input->post('color');
    $s_day = $this->input->post('start_day');
    $s_time= $this->input->post('start_time');
    $e_day =$this->input->post('end_day');
    $e_time= $this->input->post('etime');
    $std_id =  $this->session->userdata('std_id');
    $last_id = $this->fullcalendar_model->insert_event( $title, $des, $color,$s_day,$s_time,$e_day,$e_time,$std_id);
     
     echo json_encode($last_id);

   

 }

 function insert_img()
 {
   $id = $this->input->post('id');
   $file =$this->input->post('file');
   foreach($file as $f){
             $this->fullcalendar_model->insert_img($id,$f);
     }

     echo json_encode($file);



 }

 function update()
 {
  if($this->input->post('id'))
  {
   $start = $this->input->post('start');
   $end = $this->input->post('end');
   $this->fullcalendar_model->update_drop($this->input->post('id'),$start,$end);
  }
 }

 function delete()
 {
  if($this->input->post('eventid'))
  {
   $this->fullcalendar_model->delete_event($this->input->post('eventid'));
  }
 }

 public function edit_event()
 {
      $eventid = intval($this->input->post("eventid"));
      $title = $this->input->post("title");
      $desc = $this->input->post("description");
      $color = $this->input->post("color");
      $s_day = $this->input->post("start_day");
      $s_time = $this->input->post("start_time");
      $e_day = $this->input->post("end_day");
      $e_time = $this->input->post("end_time");
      $delete = intval($this->input->post("delete"));

      if(!$delete) {
                $this->fullcalendar_model->update_event($eventid,$title,$desc,$color,$s_day,$s_time,$e_day,$e_time);
    
      } else {
           $this->fullcalendar_model->delete_event($eventid);
      }
   
 }

}

?>
