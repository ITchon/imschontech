<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Contact Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_contact');
        $this->load->model('model_teacher');
        $this->load->model('model_spv');
        $this->load->model('model_pdf');
        $this->load->model('student_model');

        $contact_id =  $this->session->userdata('contact_id');
        $data['result'] = $this->model_teacher->get_division($contact_id);
        $data['result_subject'] = $this->model_spv->get_subject_teacher($contact_id);

        $this->load->view('contact/header');
        $this->load->view('contact/nevbar',$data);

		$this->model->CheckSession();
		$this->model->block_for_contact();



	}

	public function dashboard() 	
	{
        $contact_id = $this->session->userdata('contact_id');
        $data['cp'] = $this->model_contact->get_contact_profile($contact_id);


        $this->load->view('contact/menu');
        $this->load->view('contact/dashboard',$data);
		$this->load->view('contact/footer');

    }

    public function subject() 	
	{
        $contact_id =  $this->session->userdata('contact_id');
        $sql="SELECT  * FROM student_train_detail where contact_id = '$contact_id' ";
        $query = $this->db->query($sql); 
        $data['result'] = $query->result(); ;
        $this->load->view('contact/std_list',$data);
        $this->load->view('contact/footer');

    }

    public function supervision() 	
	{
        $std_id =  $this->uri->segment('3');
        $teacher_id =  $this->session->userdata('teacher_id');
        $data['result_spv'] = $this->model_spv->get_spv($std_id);
        $sql="SELECT  * FROM student_train_detail
        where std_id = '$std_id'";
        $query = $this->db->query($sql); 
        $data['result_train'] = $query->result();
		$this->load->view('contact/supervision',$data);
		$this->load->view('footer');

    }
    public function supervision_view() 	
	{   
        $spv_id =  $this->uri->segment('3');
        $sql="SELECT  * FROM `supervision_contact` sc
        inner join subject s on s.subject_id = sc.subject_id
        where spv_contact_id = '$spv_id' ";
        $query = $this->db->query($sql); 
        $data['result_spv']  = $query->row(); 
        $data['date'] = $this->model->Thai_date($data['result_spv']->approve_date);
        $data['result'] = $this->model_spv->get_spv_data($spv_id);
        $data['std_detail'] = $this->model_pdf->get_train_detail($data['result_spv']->t_id);
        // print_r($data['result']);exit;
		$this->load->view('contact/supervision_view',$data);
		$this->load->view('footer');

    }
    public function supervision_insert() 	
	{   
        $std_id =  $this->uri->segment('3');
        $data['std_detail'] = null;
        if($this->input->post('subject_id')!=null && $this->input->post('train_id')!=null){
            $data['result'] = $this->model_spv->get_subject_data($this->input->post('subject_id'));
            if($data['result']!=null){
                $data['subject_name'] = $data['result'][0]->subject_name;
                $data['subject_id'] = $data['result'][0]->subject_id;
                $data['train_id'] = $this->input->post('train_id');
                $data['std_detail'] = $this->model_pdf->get_train_detail($this->input->post('train_id'));
            }
            // print_r($data['result'][0]->subject_name);
        }
        $data['result_spv'] = $this->model_spv->get_spv_contact();
        $data['result_train'] = $this->model_spv->get_train($std_id);
		$this->load->view('contact/supervision_insert',$data);
		$this->load->view('footer');
    }
    public function supervision_save() 	
	{   
       $std_id =  $this->uri->segment('3');
       $train_id = $this->input->post('train_id');
       $subject_id = $this->input->post('subject_id');
       $suggest = $this->input->post('suggest');
       $position = $this->input->post('position');
       $max = $this->input->post('max');
      //Store data in array 2 dimension 
       $a= [];
       for($i=1;$i<=$max;$i++){
          $data = $this->input->post($i);
          $g_id = substr($data, 1);
          $score = substr($data, 0, 1);
          $data= array ("glist_id"=>$g_id,"score"=>$score);
          array_push($a,$data);
       }
       $result = $this->model_spv->supervision_save($train_id,$subject_id,$suggest,$position,$a);
       if($result){
            $this->session->set_flashdata('success','<div class="alert alert-success"><span> บันทึกข้อมูลเรียบร้อย</span></div>');
            redirect("contact/supervision/$std_id");  
       }else{
            $this->session->set_flashdata('success','<div class="alert alert-danger"><span> เกิดข้อผิดพลาด</span></div>');
            redirect("contact/supervision_insert/$std_id");  
       }
    }
	public function trainer() 	
	{
        if($this->input->post('std_id')){
            $std_id = $this->input->post('std_id'); 
            $text = "and student.std_id = '$std_id'";
        }else{
            $text = '';
        }

        $contact_id = $this->session->userdata('contact_id');	
        $data['student_list'] = $this->model_contact->get_mytrainer($contact_id);

        $data['result_test'] = $this->model_contact->get_std_data($contact_id,$text);
        $data['result_search'] = $this->model_contact->get_std_data1($contact_id);

        $data['result'] = $this->model_contact->get_events_date2($contact_id);

        $this->load->view('contact/trainer',$data);
        $this->load->view('contact/modal');
		$this->load->view('contact/footer');

	}
	
	public function trainer_data() 	
	{
        // $contact_id = $this->session->userdata('contact_id');

    if($this->uri->segment('3')){
    $std_id =  $this->uri->segment('3');
    $train_id = $this->input->post('train_id'); 
    $data['train_id'] = $train_id;
    $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
    $data['train_select'] = $this->student_model->get_train($std_id);
    
    $res = $this->model_teacher->get_std($std_id);
    $class_id = $res->class_id;

    $start_date = $data['train_detail'][0]->start_date;
    $end_date = $data['train_detail'][0]->end_date;
    $data['result'] = $this->model_contact->get_events_date($start_date,$end_date,$std_id,$class_id);
   
    $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' AND contact_confirm = 0 ORDER BY `events`.`start_event` DESC";
      $query = $this->db->query($sql); 
      $data['result_test'] = $query->result();


    } else if($this->input->get('student_search')){
        
        $train_id = $this->input->post('train_id'); 

        $student_search = $this->input->get('student_search');
        $res = $this->model_teacher->get_stdid_bycode($student_search);
        $std_id = $res->std_id;
        $class_id = $res->class_id;
        $data['train_id'] = $train_id;
        $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
        $data['train_select'] = $this->student_model->get_train($std_id);
    
        $start_date = $data['train_detail'][0]->start_date;
        $end_date = $data['train_detail'][0]->end_date;
        $data['result'] = $this->model_contact->get_events_date($start_date,$end_date,$std_id,$class_id);

      $sql =  "SELECT DISTINCT DATE_FORMAT(start_event,'%Y-%m-%d') AS date FROM `events` WHERE start_event BETWEEN '$start_date' AND  '$end_date' and std_id = '$std_id' AND contact_confirm = 0 ORDER BY `events`.`start_event` DESC";
      $query = $this->db->query($sql); 
      $data['result_test'] = $query->result();

     }
    $this->load->library('Googlemaps');
    $config['center'] = '37.4419, -122.1419';
    $config['zoom'] = 'auto';
    $this->googlemaps->initialize($config);

    $marker = array();
    $latlong = $data['train_detail'][0]->latlong;
    $marker['position'] = $latlong;
    $this->googlemaps->add_marker($marker);
    $data['map'] = $this->googlemaps->create_map();

    $contact_chk = $data['train_detail'][0]->contact_id;
     if($train_id == null ) $data['train_id'] = $data['train_detail'][0]->t_id;
    // if($contact_chk == $contact_id){
        $this->load->view('contact/modal');
        $this->load->view('contact/trainer_data',$data);
        $this->load->view('contact/footer');
        
    // }else{
    //     echo "who this";
    //     die();
    // }

	}

	public function confirm()
    {
        $std_id = $this->input->post('std_id'); 
        $date = $this->input->post('date'); 
        $result = $this->model_teacher->get_eid($std_id,$date);

        foreach($result as $r){
            $id = $r->id;
            $result = $this->model_contact->contact_confirm($id);
        }
        if($result != true){
            echo "wtf happend";
            die();
        }else{
            echo '<script language="javascript">';
                echo 'history.go(-1);';
                echo '</script>';
        }

    }

    public function no_confirm()
    {
        $std_id = $this->input->post('std_id'); 
        $date = $this->input->post('date'); 
        $result = $this->model_teacher->get_eid($std_id,$date);

        foreach($result as $r){
            $id = $r->id;
            $result = $this->model_contact->contact_noconfirm($id);
        }
        if($result != true){
            echo "wtf happend";
            die();
        }else{
            echo '<script language="javascript">';
                echo 'history.go(-1);';
                echo '</script>';
        }

    }
}
?>