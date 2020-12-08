<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class main Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('header');
        $this->load->view('nevbar');
		$this->load->database(); 
        $this->load->model('model');

		$this->model->CheckSession();
	}

	public function index() 	
	{
		if($this->session->userdata('teacher_id')){
			$this->load->view('teacher/index');
			
		}else if($this->session->userdata('std_id')){
			$this->load->view('student/index');
			
		}else if($this->session->userdata('admin_id')){
			$this->load->view('admin/index');
		}
		 
		 $this->load->view('footer');

	}




}
?>