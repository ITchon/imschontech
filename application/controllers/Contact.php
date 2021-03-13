<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Contact Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('contact/header');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_contact');
        $this->load->model('model_teacher');
        $this->load->model('student_model');

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


	public function trainer() 	
	{
        $contact_id = $this->session->userdata('contact_id');	
        $data['student_list'] = $this->model_contact->get_mytrainer($contact_id);


        $this->load->view('contact/menu');
        $this->load->view('contact/trainer',$data);
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