<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class main Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		
        
		$this->load->database(); 
        $this->load->model('model');

		$this->model->CheckSession();
	}

	public function index() 	
	{
		if($this->session->userdata('teacher_id')){
			$this->load->view('student/header');
			$this->load->view('student/menu');
			$this->load->view('teacher/dashboard');
			$this->load->view('footer');
			
		}else if($this->session->userdata('std_id')){
			$this->load->view('student/menu');
      		$this->load->view('student/dashboard');
	  		$this->load->view('footer');
			

		}else if($this->session->userdata('admin_id')){
			$this->load->view('ADMIN FOR ADMIN/header');
			$this->load->view('ADMIN FOR ADMIN/nevbar');

			$this->load->view('ADMIN FOR ADMIN/dashboard/index');
			$this->load->view('ADMIN FOR ADMIN/footer_2020');
		}


		 
		 
	
	}




}
?>