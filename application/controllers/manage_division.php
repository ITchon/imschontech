<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_division Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('division_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM division";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $id = $this->input->post('id');
        // $query = $this->db->query("SELECT * FROM division WHERE dv_id = $id");
        // $data['result_edit'] = $query->result();
		$this->load->view('admin/division/view',$data);
		$this->load->view('admin/footer_2020');
    }
    

	public function insert_dv_p()
	{
		$dv_name    = $this->input->post('dv_name'); 
        
	  
        $this->division_model->insert_dv($dv_name ); 
        redirect('manage_division');
	}

	// public function edit_student()
	// {
	// 	$id = $this->uri->segment('3'); 
    //     $data['result'] = $this->student_model->selectOnestudent($id);
    //     // $data['result_g'] = $this->teacher_model->select();
	// 	$this->load->view('admin/student/edit',$data);
	// }

	// public function edit_student_p()
	// {
	// 	$title    = $this->input->post('title'); 
    //     $fname    = $this->input->post('fname');
    //     $lname    = $this->input->post('lname');
    //     $gender   = $this->input->post('gender');
    //     $tel      = $this->input->post('tel');
    //     $email    = $this->input->post('email');
    //     $status    = $this->input->post('status');
	// 	$std_code = $this->input->post('std_code');
	// 	$birth_date = $this->input->post('birth_date');
    //     $class_id = $this->input->post('class_id');
	//     $std_id 	  = $this->input->post('std_id');
    //     $this->student_model->update_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id ,$std_id); 
    //     redirect('manage_student');
	// }

	public function delete_division_p($dv_id)
	{
		$result = $this->division_model->del_dv_p($dv_id);
		if($result!=FALSE)
		{
            redirect('manage_division','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_division','refresh');
		}

	}
}
?>