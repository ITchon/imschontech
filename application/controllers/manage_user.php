<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_user Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('model');
		$this->load->model('student_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM user ";
        $query = $this->db->query($qry_inp);
        $data['result'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/user/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
		$this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal',$data);
    }
    
	public function insert_user()
	{
	
		$this->load->view('ADMIN FOR ADMIN/user/insert');
		// $this->load->view('ADMIN FOR ADMIN/footer_2020');
		
	}

	public function insert_p()//insert user แบ่งตามกลุ่ม
	{

		$usergroup    = $this->input->post('usergroup');
		$user_id = $this->input->post('user');
		if($usergroup == null) {
			$this->session->set_flashdata
			('success','<div id="hide" class="alert alert-warning">
									<span>  
						<b>กรุณาเลือกข้อมูล</b> </span> 
			</div>');
			redirect('manage_user/insert_user');

		}
		else if($usergroup != "admin"){
			$status_login = 0;
			if($usergroup == "student"){
				$qry_inp1 =  "SELECT * FROM student where std_id = '$user_id'";
				$query1 = $this->db->query($qry_inp1); 
				$data = $query1->result();
				$username = $data[0]->std_code;
				$password = $data[0]->birth_date;
			}
			if($usergroup == "teacher"){
				$qry_inp1 =  "SELECT * FROM teacher where teacher_id = '$user_id'";
				$query1 = $this->db->query($qry_inp1); 
				$data = $query1->result();
				$username = $data[0]->citizen_id;
				$password = $data[0]->th_birth_date;
			}
			if($usergroup == "bilateral"){
				$qry_inp1 =  "SELECT * FROM officer where officer_id = '$user_id'";
				$query1 = $this->db->query($qry_inp1); 
				$data = $query1->result();
				$username = $data[0]->citizen_id;
				$password = $data[0]->of_birth_date;
			}
			if($usergroup == "course"){
				$qry_inp1 =  "SELECT * FROM officer where officer_id = '$user_id'";
				$query1 = $this->db->query($qry_inp1); 
				$data = $query1->result();
				$username = $data[0]->citizen_id;
				$password = $data[0]->of_birth_date;
			}
			if($usergroup == "contact"){
				$user_id = 1;
				$username= $this->input->post('username');
				$password= $this->input->post('password');
			}
		}else{
			$user_id = 1;
			$username= $this->input->post('username');
			$password= $this->input->post('password');
			$status_login = 1;
		}
		$result =  $this->model->insert_user($user_id,$usergroup ,$username ,$password ,$status_login);
		if($result==1){
			$this->session->set_flashdata
			('success','<div id="hide" class="alert alert-success">
									<span>  
						<b>เพิ่มผู้ใช้งานแล้ว</b> </span> 
			</div>');
		}else if($result == 2){
			$this->session->set_flashdata
			('success','<div id="hide" class="alert alert-danger">
									<span>  
						<b>มี username นี้แล้ว</b> </span> 
			</div>');
		}else{
			$this->session->set_flashdata
			('success','<div id="hide" class="alert alert-danger">
									<span>  
						<b>Error</b> </span> 
			</div>');
		}
		 redirect('manage_user/insert_user');

	}

	public function edit_user()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->model->selectuser($id);
        // $data['result_ct'] = $this->model->selectusercont($id);
		$this->load->view('ADMIN FOR ADMIN/user/edit',$data);
        // $this->model->update_user($user_id ,$username ,$password ,$id); 
	}

	public function edit_p()
	{
		$user_id    = $this->input->post('user_id'); 
        $username    = $this->input->post('username');
        $password    = $this->input->post('password');
        
        
	    $id 	  = $this->input->post('id');
        $this->model->update_user($user_id ,$username ,$password ,$id); 
        redirect('manage_user');
	}

	public function delete($std_id)
	{
		$result = $this->student_model->del_std_p($std_id);
		if($result!=FALSE)
		{
            redirect('manage_student','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_student','refresh');
		}

	}
}
?>