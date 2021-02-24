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
	
    }
    
	// public function insert_user()
	// {
	
	// 	$this->load->view('ADMIN FOR ADMIN/user/insert');
	// }

	// public function insert_p()
	// {
	// 	$username    = $this->input->post('title'); 
    //     $password    = $this->input->post('fname');
    //     $usergroup    = $this->input->post('lname');
      
	// 	$this->model->insert_user($usergroup,$std_code,$birth_date,0);
    //     redirect('manage_student');
	// }

	public function edit_user()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->model->selectuser($id);
        // $qry_inp =  "SELECT * FROM class";
        // $query = $this->db->query($qry_inp); 
        // $data['result_cl'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/user/edit',$data);
		
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