<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_student Extends CI_controller{

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
		$qry_inp =  "SELECT 
					cl.class_id,
					cl.class_name,
					cl.class_group,	
					std.std_id,
					std.title,
					std.fname,
					std.lname,
					std.gender,
					std.tel,
					std.email,
					std.status,
					std.std_code,
					std.birth_date,
					std.class_id FROM student AS std 
					INNER JOIN class AS cl ON cl.class_id = std.class_id";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/student/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
		$this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal',$data);

	
    }
    
	public function insert_student()
	{
		$qry_inp =  "SELECT * FROM class";
        $query = $this->db->query($qry_inp); 
        $data['result_cl'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/student/insert',$data);
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
        $user_id = $this->student_model->insert_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id); 
		$this->model->insert_user($user_id,"student",$std_code,$birth_date,0);
        redirect('manage_student');
		
	}

	public function edit_student()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->student_model->selectOnestudent($id);
        $qry_inp =  "SELECT * FROM class";
        $query = $this->db->query($qry_inp); 
        $data['result_cl'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/student/edit',$data);
		
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

	public function delete($std_id)
	{
		$result = $this->student_model->del_std_p($std_id);

		$id = $std_id;

			$result = $this->model->delete_user($id);	

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