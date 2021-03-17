<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_officer Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('officer_model');
		$this->load->model('model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');

	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM officer" ;
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/officer/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
	
	}
	public function insert_officer()
	{

		$this->load->view('ADMIN FOR ADMIN/officer/insert');
	}

	public function insert_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$of_code = $this->input->post('of_code');
		$password = $this->input->post('of_birth_date');
        $username = $this->input->post('citizen_id');
        $usergroup = $this->input->post('usergroup');
		$status_login = "0";
		$user_id=$this->officer_model->insert_officer($username, $title ,$fname ,$lname ,$tel ,$email ,$of_code ,$password,$usergroup); 

				 $this->model->insert_user($user_id, $usergroup, $username, $password, $status_login);
				 $this->session->set_flashdata
			('success','<div class="alert alert-success　">
									<span><b> กรอกข้อมูลสำเร๊จ !!</b> </span> 
						</div>');
        redirect('manage_officer/insert_officer');
	}

	public function edit_officer()
	{	
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->officer_model->selectOneOfficer($id);
		$this->load->view('ADMIN FOR ADMIN/officer/edit',$data);
	}

	public function edit_officer_p()
	{
		$title    = $this->input->post('title'); 
        $fname    = $this->input->post('fname');
        $lname    = $this->input->post('lname');
        $tel      = $this->input->post('tel');
		$email    = $this->input->post('email');
		$of_code = $this->input->post('of_code');
		$of_birth_date = $this->input->post('of_birth_date');
        // $class_id = $this->input->post('class_id');
	    $of_id 	  = $this->input->post('officer_id');
        $this->officer_model->update_officer($title ,$fname ,$lname ,$tel ,$email ,$of_code ,$of_birth_date ,$of_id); 
        redirect('manage_officer');
	}

	public function delete_officer_p($officer_id)
	{
		$result = $this->officer_model->del_officer_p($officer_id);

		$id = $officer_id;

			$result = $this->model->delete_user($id);	
		


		if($result!=FALSE)
		{
            redirect('manage_officer','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_officer','refresh');
		}

	}
}
?>