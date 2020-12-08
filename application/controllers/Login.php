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
		$this->load->view('login');
	}

	public function chklogin()
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
  
		$data= $this->model->chk_student($user,$pass);
		if($data != true){
			$data= $this->model->chk_teacher($user,$pass);
			if($data != true){
				$data= $this->model->chk_admin($user,$pass);
				if($data != true){
					$this->session->set_flashdata('success','<div class="alert alert-danger hide-it">  
					<span> Wrong username or password </span>
				  </div> ');
					  redirect('login');  
				}
			}
		}
         if($data != null){
				if($data['teacher_id']){
				$arrData = array('user_id'=> $data['teacher_id'],'password'=> $data['password'],'username'=> $data['username'],'class_id'=>$data['class_id'],'login' => "OK" ,'fname'=>$data['fname'] , 'lname' =>$data['lname']);	
				$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('main');
				 }
				else if($data['std_id']){
				$arrData = array('user_id'=> $data['std_id'],'password'=> $data['password'],'username'=> $data['username'],'class_id'=>$data['class_id'],'login' => "OK" ,'fname'=>$data['fname'] , 'lname' =>$data['lname']);	
            	$this->session->set_userdata($arrData);
				$username = $this->session->userdata('username');
				redirect('main');
				 }
				else if($data['admin_id']){
			 	$arrData = array('user_id'=> $data['admin_id'],'password'=> $data['password'],'username'=> $data['username'],'class_id'=>$data['class_id'],'login' => "OK" ,'fname'=>$data['fname'] , 'lname' =>$data['lname']);	
             	$this->session->set_userdata($arrData);
			 	$username = $this->session->userdata('username');
			 	redirect('main');
				 }
			 
            

        }


     
     
   
   }

}