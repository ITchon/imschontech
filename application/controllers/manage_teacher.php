<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_teacher Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('teacher_model');
		$this->load->model('model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT 	
						-- cl.class_id,
						cl.class_name,
						th.teacher_id,
						th.title,
						th.fname,
						th.lname,
						th.tel,
						th.email,
						th.th_code,
						th.th_birth_date FROM teacher AS th LEFT JOIN class AS cl ON cl.teacher_id = th.teacher_id" ;
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        $data['result_g'] = $this->teacher_model->teacher();
		$this->load->view('ADMIN FOR ADMIN/teacher/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
		$this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal',$data);
	
	}
	public function insert_teacher()
	{
		$qry_inp =  "SELECT * FROM class";
        $query = $this->db->query($qry_inp); 
        $data['result_cl'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/teacher/insert',$data);
	}

	public function insert_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$th_code = $this->input->post('th_code');
		$password = $this->input->post('th_birth_date');
        $username = $this->input->post('citizen_id');
	    $th_id 	  = $this->input->post('teacher_id');
		$usergroup = "teacher";
		$status_login = "0";
		$user_id=$this->teacher_model->insert_teacher($username, $title ,$fname ,$lname ,$tel ,$email ,$th_code ,$password  ,$th_id); 

				 $this->model->insert_user($user_id, $usergroup, $username, $password, $status_login);
				 $this->session->set_flashdata
			('success','<div class="alert alert-success　">
									<span><b> กรอกข้อมูลสำเร๊จ !!</b> </span> 
						</div>');
        redirect('manage_teacher/insert_teacher');
	}

	public function edit_teacher()
	{	
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->teacher_model->selectOneTeacher($id);
        $qry_inp =  "SELECT * FROM class";
        $query = $this->db->query($qry_inp); 
        $data['result_cl'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/teacher/edit',$data);
	}

	public function edit_teacher_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$th_code = $this->input->post('th_code');
		$th_birth_date = $this->input->post('th_birth_date');
        // $class_id = $this->input->post('class_id');
	    $th_id 	  = $this->input->post('teacher_id');
        $this->teacher_model->update_teacher($title ,$fname ,$lname ,$tel ,$email ,$th_code ,$th_birth_date ,$th_id); 
        redirect('manage_teacher');
	}

	public function delete($teacher_id)
	{
		$result = $this->teacher_model->del_teacher_p($teacher_id);

		$id = $teacher_id;

			$result = $this->model->delete_user($id);	
		


		if($result!=FALSE)
		{
            redirect('manage_teacher','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_teacher','refresh');
		}

	}
}
?>