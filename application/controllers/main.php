<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class main Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
	}

	public function index() 	
	{
		if($this->session->userdata('status_login') == 0){
			$this->load->view('changepassword');
		}else if($this->session->userdata('std_id')){
			redirect('student');
		}else if($this->session->userdata('teacher_id')){
			redirect('teacher/division');
		}else if($this->session->userdata('contact_id')){
			redirect('contact/trainer');
		}else if($this->session->userdata('admin_id')){
			$this->load->view('ADMIN FOR ADMIN/header');
			$this->load->view('ADMIN FOR ADMIN/nevbar');

			$this->load->view('ADMIN FOR ADMIN/dashboard/index');
			$this->load->view('ADMIN FOR ADMIN/footer_2020');
		}


		 
		 
	
	}




}
?>