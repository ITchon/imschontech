<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_student Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('student_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM student";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
		$this->load->view('student/view_student',$data);
	
    }
    
	public function insert_student()
	{
		$this->load->view('student/insert_student');
	}

	public function insert_student_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $gender   = $this->input->post('gender');
        $tel      = $this->input->post('tel');
        $email    = $this->input->post('email');
        $status    = $this->input->post('status');
		$std_code = $this->input->post('std_code');
		$birth_date = $this->input->post('birth_date');
        $class_id = $this->input->post('class_id');
	  
        $this->student_model->insert_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id); 
        redirect('manage_student');
	}

	public function edit_student()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->student_model->selectOnestudent($id);
        // $data['result_g'] = $this->teacher_model->select();
		$this->load->view('student/edit_student',$data);
	}

	public function edit_student_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $gender   = $this->input->post('gender');
        $tel      = $this->input->post('tel');
        $email    = $this->input->post('email');
        $status    = $this->input->post('status');
		$std_code = $this->input->post('std_code');
		$birth_date = $this->input->post('birth_date');
        $class_id = $this->input->post('class_id');
	    $std_id 	  = $this->input->post('std_id');
        $this->student_model->update_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id ,$std_id); 
        redirect('manage_student');
	}

	public function delete_student_p($std_id)
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