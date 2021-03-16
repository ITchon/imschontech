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
	public function save_new_pass()
	{
        $pass1 = $this->input->post('password1');
		$pass2 = $this->input->post('password2');
		if($pass1 == $pass2){
			$id = $this->session->userdata('id');
			$this->model->save_new_pass($pass1,$id);
			$this->session->set_flashdata
			('success','<div class="alert alert-success">
									<span>  
						<b> กรุณากรอกรหัสใหม่เพื่อเข้าสู่ระบบ !!</b> </span> 
			</div>');
			  redirect('login');  
		}else{
			$this->session->set_flashdata
			('failed','<div class="alert alert-danger">
									<span>  
						<b> รหัสผิดพลาด !!</b> - กรุณาตรวจสอบรหัสไหม่ </span> 
			</div>');
			redirect('main');  
		}
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
					$userdata = $this->model->GetUserData("teacher",$condition);
					$arrData = array(
								'id' => $data['id'],
								'teacher_id'=> $userdata['teacher_id'],
								'usergroup'=> $data['usergroup'],
								'password'=> $userdata['password'],
								'username'=> $userdata['username'],
								'login' => "OK" ,
								'status_login' => $data['status_login'] ,
								'fname'=>$userdata['fname'] ,
								'lname' =>$userdata['lname']);	
				$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('main');
				 }
				 else if($data['usergroup']=="bilateral"){
					$condition = "officer_id = ".$data['user_id'];
					$userdata = $this->model->GetUserData("officer",$condition);
					$arrData = array(
						'id' => $data['id'],
						'officer_id'=> $userdata['officer_id'],
						'usergroup'=> $data['usergroup'],
						'password'=> $userdata['password'],
						'username'=> $userdata['username'],
						'login' => "OK" ,
						'status_login' => $data['status_login'] ,
						'fname'=>$userdata['fname'] ,
						'lname' =>$userdata['lname']);		
					$this->session->set_userdata($arrData);
					$username = $this->session->userdata('username');
					redirect('main');
					 }
					 else if($data['usergroup']=="course"){
						$condition = "officer_id = ".$data['user_id'];
						$userdata = $this->model->GetUserData("officer",$condition);
						$arrData = array(
							'id' => $data['id'],
							'officer_id'=> $userdata['officer_id'],
							'usergroup'=> $data['usergroup'],
							'password'=> $userdata['password'],
							'username'=> $userdata['username'],
							'login' => "OK" ,
							'status_login' => $data['status_login'] ,
							'fname'=>$userdata['fname'] ,
							'lname' =>$userdata['lname']);		
						$this->session->set_userdata($arrData);
						$username = $this->session->userdata('username');
						redirect('main');
						 }
				 else if($data['usergroup']=="contact"){
					$condition = "contact_id = ".$data['user_id'];
					$userdata = $this->model->GetUserData("contact",$condition);
					$arrData = array(
									'id' => $data['id'],
									'contact_id'=> $userdata['contact_id'],
									'usergroup'=> $data['usergroup'],
									'status_login' => $data['status_login'] ,
									'tel'=> $userdata['tel'],
									'name' =>$userdata['name']);	
					$this->session->set_userdata($arrData);
					$username = $this->session->userdata('username');
					redirect('main');
					 }
				else if($data['usergroup']=="student"){

					$condition = "std_id = ".$data['user_id'];
					$userdata = $this->model->GetUserData("student",$condition);
				
					$arrData = array(
								'id' => $data['id'],
								'std_id'=> $userdata['std_id'],
								'usergroup'=> $data['usergroup'],
								'tel'=> $userdata['tel'],
								'birth_date'=> $userdata['birth_date'],
								'class_id'=>$userdata['class_id'],
								'login' => "OK" ,
								'status_login' => $data['status_login'] ,
								'fname'=>$userdata['fname'] ,
								'lname' =>$userdata['lname']);	
            	$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('main');
				 }
				else if($data['usergroup']=="admin"){
			 	$arrData = array('id' => $data['id'],'admin_id'=> $data['user_id'],'password'=> $data['password'],'username'=> $data['username'],'login' => "OK",'status_login' => $data['status_login'],
				 'usergroup'=> $data['usergroup']);	
             	$this->session->set_userdata($arrData);
			 	$username = $this->session->userdata('username');
			 	redirect('main');
				 }
			 
            

        }


     
     
   
   }

}
