<?php

	class Student extends CI_Controller {

		function __construct(){
			parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->view('student/header');
      $this->load->view('student/menu');  
      $this->load->database(); 
      $this->load->model('model');
      $this->load->model('student_model');
		}
    function index()
    {
     redirect("Student/view");
    }
    function calendar(){
      $this->load->view('student/calendar');

    }
    function profile(){
      $std_id =  $this->session->userdata('std_id');
      $data['result'] = $this->student_model->get_student($std_id);
      $this->load->view('student/profile',$data);

    }
    function view(){
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

      $std_id =  $this->session->userdata('std_id');
      $sql =  "SELECT * FROM events where std_id =  $std_id";
      $query = $this->db->query($sql); 
      $data['result'] = $query->result();
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
}

?>