<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_contact Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('contact_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM contact";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $data['result_g'] = $this->contact_model->teacher();
		$this->load->view('admin/contact/view',$data);
		$this->load->view('admin/footer_2020');
	
	}
	public function insert()
	{
		$this->load->view('admin/contact/insert');
	}

	public function insert_p()
	{
		$name    = $this->input->post('name'); 
        $tel    = $this->input->post('tel');
        $username    = $this->input->post('username');
        $password      = $this->input->post('password');
		
        $this->contact_model->insert_p($name ,$tel ,$username ,$password); 
        redirect('manage_contact');
	}

	public function edit()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->contact_model->selectOneContact($id);
        // $data['result_g'] = $this->contact_model->select();
		$this->load->view('admin/contact/edit',$data);
	}

	public function edit_p()
	{
		$name    = $this->input->post('name'); 
        $tel    = $this->input->post('tel');
        $username    = $this->input->post('username');
        $password      = $this->input->post('password');
		
	    $ct_id 	  = $this->input->post('contact_id');
        $this->contact_model->edit_p($name ,$tel ,$username ,$password ,$ct_id); 
        redirect('manage_contact');
	}

	public function delete_p($contact_id)
	{
		$result = $this->contact_model->del_p($contact_id);
		if($result!=FALSE)
		{
            redirect('manage_contact','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_contact','refresh');
		}

	}
}
?>