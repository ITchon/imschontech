<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fullcalendar extends CI_Controller {

 public function __construct()
 {
  parent::__construct();
  $this->load->model('fullcalendar_model');
  $this->load->helper('url');
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

 function insert()
 {
      $config['upload_path']="./uploads";
      $config['allowed_types']='gif|jpg|png';
      $config['encrypt_name'] = TRUE;

   $title =$this->input->post('title');
   $des = $this->input->post('description');
   $color = $this->input->post('color');
    $s_day = $this->input->post('start_day');
    $s_time= $this->input->post('start_time');
    $e_day =$this->input->post('end_day');
    $e_time= $this->input->post('etime');
    $file= $this->input->post('file_name');
    $std_id =  $this->session->userdata('std_id');

    $last_id = $this->fullcalendar_model->insert_event( $title, $des, $color,$s_day,$s_time,$e_day,$e_time,$std_id);
      
     
     echo json_decode($file);
 }

 function do_upload(){
     

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
