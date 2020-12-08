<?php

	class Std_dashboard extends CI_Controller {

		function __construct(){
			parent::__construct();
      $this->load->helper('url');
      $this->load->helper('form');
      $this->load->view('student/header');
      $this->load->database(); 
      $this->load->model('model');
		}
    function index()
    {
      $this->load->view('student/menu');
      $this->load->view('student/index');
	  	$this->load->view('footer');
    }
    function calendar(){
      $this->load->view('student/menu');
      $this->load->view('student/calendar');

    }
    function view(){
      $this->load->view('student/menu');
      $this->load->view('student/dashboard');
	  	$this->load->view('footer');

    }
}

?>