<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_teacher Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('teacher_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM teacher";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        $data['result_g'] = $this->teacher_model->teacher();
		$this->load->view('teacher/view_teacher',$data);
	
	}
	public function insert_teacher()
	{
		$this->load->view('teacher/insert_teacher');
	}

	public function insert_teacher_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $class_id = $this->input->post('class_id');
	    $th_id 	  = $this->input->post('teacher_id');
        $this->teacher_model->insert_teacher($title ,$fname ,$lname ,$tel ,$email ,$username ,$password ,$class_id ,$th_id); 
        redirect('manage_teacher');
	}

	public function edit_teacher()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->teacher_model->selectOneTeacher($id);
        // $data['result_g'] = $this->teacher_model->select();
		$this->load->view('teacher/edit_teacher',$data);
	}

	public function edit_teacher_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
        $class_id = $this->input->post('class_id');
	    $th_id 	  = $this->input->post('teacher_id');
        $this->teacher_model->update_teacher($title ,$fname ,$lname ,$tel ,$email ,$username ,$password ,$class_id ,$th_id); 
        redirect('manage_teacher');
	}

	public function delete_teacher_p($teacher_id)
	{
		$result = $this->teacher_model->del_teacher_p($teacher_id);
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