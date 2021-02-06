<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');

	}

	public function index()
	{
		$this->session->sess_destroy();
		$this->load->view('login');
	}

	public function chklogin()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
		$data= $this->model->chk_user($user,$pass);
					if($data != true){
						$this->session->set_flashdata
						('success','<div class="alert alert-danger">
												<span>  
									<b> รหัสผิดพลาด !!</b> - กรุณาตรวจสอบรหัสไหม่ </span> 
						</div>');
						  redirect('login');  
					}
         else{
				if($data['usergroup']=="teacher"){
					$condition = "teacher_id = ".$data['user_id'];
					$data = $this->model->GetUserData("teacher",$condition);
					$arrData = array('teacher_id'=> $data['teacher_id'],
								'password'=> $data['password'],
								'username'=> $data['username'],
								'login' => "OK" ,
								'fname'=>$data['fname'] ,
								'lname' =>$data['lname']);	
				$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('teacher/division');
				 }
				 else if($data['usergroup']=="contact"){
					$condition = "contact_id = ".$data['user_id'];
					$data = $this->model->GetUserData("contact",$condition);
					$arrData = array('contact_id'=> $data['contact_id'],
									'tel'=> $data['tel'],
									'name' =>$data['name']);	
					$this->session->set_userdata($arrData);
					$username = $this->session->userdata('username');
					redirect('contact/trainer');
					 }
				else if($data['usergroup']=="student"){
					$condition = "std_id = ".$data['user_id'];
					$data = $this->model->GetUserData("student",$condition);
					$arrData = array('std_id'=> $data['std_id'],
								'tel'=> $data['tel'],
								'birth_date'=> $data['birth_date'],
								'class_id'=>$data['class_id'],
								'login' => "OK" ,
								'fname'=>$data['fname'] ,
								'lname' =>$data['lname']);	
            	$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('student');
				 }
				else if($data['usergroup']=="admin"){
			 	$arrData = array('admin_id'=> $data['user_id'],'password'=> $data['password'],'username'=> $data['username'],'login' => "OK" );	
             	$this->session->set_userdata($arrData);
			 	$username = $this->session->userdata('username');
			 	redirect('main');
				 }
			 
            

        }


     
     
   
   }

}
