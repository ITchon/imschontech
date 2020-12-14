<?php

	class Student extends CI_Controller {

		function __construct(){
			parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');  
      $this->load->database();  
      $this->load->model('model');
      $this->load->model('student_model');
      $this->model->chk_session();
		}
    function index()
    {
     redirect("Student/view");
    }
    function calendar(){
      $this->load->view('student/header');
      $this->load->view('student/menu');
      $this->load->view('student/calendar');

    }
    function profile(){
      $this->load->view('student/header');
      $this->load->view('student/menu');
      $std_id =  $this->session->userdata('std_id');
      $data['result'] = $this->student_model->get_student($std_id);
      $this->load->view('student/profile',$data);

    }
    function view(){
      $this->load->view('student/header');
      $this->load->view('student/menu');
      $std_id =  $this->session->userdata('std_id');
      $train_id = $this->input->post('train_id'); 
      $data['train_id'] = $train_id;
      $data['train_detail'] = $this->student_model->get_student($std_id,$train_id);
      if($data['train_detail'] == null){
        redirect("student/error");
      }
      $data['train_select'] = $this->student_model->get_train($std_id);

      $start_date = $data['train_detail'][0]->start_date;
      $end_date = $data['train_detail'][0]->end_date;


      $sql =  "SELECT * FROM `events` where start_event <= '$end_date' AND end_event >= '$start_date' and std_id = '$std_id'";
      $query = $this->db->query($sql); 
      $data['result'] = $query->result();

      $this->load->library('Googlemaps');
      $config['center'] = '37.4419, -122.1419';
      $config['zoom'] = 'auto';
      $this->googlemaps->initialize($config);

      $marker = array();
      $lat = $data['train_detail'][0]->latitude;
      $long = $data['train_detail'][0]->longitude; 
      $marker['position'] = $lat.','.$long;
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();

      $this->load->view('student/dashboard', $data);
      $this->load->view('student/footer');
    }
    
    function map(){
      $this->load->library('Googlemaps');
      $config['center'] = '37.4419, -122.1419';
      $config['zoom'] = 'auto';
      $this->googlemaps->initialize($config);

      $marker = array();
      $lat = '13.4538667';
      $long ='101.1025658'; 
      $marker['position'] = $lat.','.$long;
      $this->googlemaps->add_marker($marker);
      $data['map'] = $this->googlemaps->create_map();

      $this->load->view('student/dashboard', $data);
    }
    
    function error(){
      $this->load->view('student/header');
      $this->load->view('student/error');
    }
}

?>