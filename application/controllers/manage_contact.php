<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_contact Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('contact_model');
		$this->load->model('model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM contact ct inner join company c on c.company_id = ct.company_id";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $data['result_g'] = $this->contact_model->teacher();
		$this->load->view('ADMIN FOR ADMIN/contact/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
		$this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal',$data);

	
	}
	public function insert()
	{
		$query = $this->db->query("SELECT * FROM company");
        $data['result'] = $query->result();
		// print_r($data['result']);exit;
		$this->load->view('ADMIN FOR ADMIN/contact/insert',$data);
	}

	public function insert_p()
	{
		$name    = $this->input->post('name'); 
        $tel    = $this->input->post('tel');
        $company    = $this->input->post('company');
        $username    = $this->input->post('username');
        $password      = $this->input->post('password');
		$user_id = $this->contact_model->insert_p($name ,$tel,$company); 
		$this->model->insert_user($user_id,"contact",$username,$password,0);
        redirect('manage_contact');
	}

	public function edit()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->contact_model->selectOneContact($id);
        $data['result_ct'] = $this->model->selectusercont($id);
		$this->load->view('ADMIN FOR ADMIN/contact/edit',$data);

	}

	public function edit_p()
	{
		$name    = $this->input->post('name'); 
        $tel    = $this->input->post('tel');
        $username    = $this->input->post('username');
        $password      = $this->input->post('password');
		
	    $ct_id 	  = $this->input->post('contact_id');
        $user_id =$this->contact_model->edit_p($name ,$tel ,$username ,$password ,$ct_id); 

		//  $this->student_model->insert_student($title ,$fname ,$lname,$gender ,$tel ,$email,$status ,$std_code ,$birth_date ,$class_id); 
		$this->model->insert_user($user_id,"contact",$username,$password,0);

        redirect('manage_contact');
	}

	public function delete($contact_id)
	{
		
		$result = $this->contact_model->del_p($contact_id);

		$id = $contact_id;

			$result = $this->model->delete_user($id);	
		
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
