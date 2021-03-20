<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Classs Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('class_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
	
		$qry_inp =  "SELECT cl.class_id , cl.teacher_id , cl.dv_id , cl.class_name ,cl.level_group ,cl.class_group , th.fname , th.lname , dv.dv_name FROM class AS cl 
						INNER JOIN teacher AS th ON th.teacher_id = cl.teacher_id 
						INNER JOIN division AS dv ON dv.dv_id = cl.dv_id";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
		
		$this->load->view('ADMIN FOR ADMIN/class/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
		$this->load->view('ADMIN FOR ADMIN/script');
        $this->load->view('ADMIN FOR ADMIN/modal',$data);
    }

    public function insert_class()
	{	
		$qry_inp1 =  "SELECT * FROM teacher";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_th'] = $query1->result();
		$qry_inp2 =  "SELECT * FROM division";
		$query1 = $this->db->query($qry_inp2); 
        $data['result_dv'] = $query1->result();
		$this->load->view('ADMIN FOR ADMIN/class/insert',$data);
	}


	public function insert_cl_p()
	{
        $teacher_id    = $this->input->post('teacher_id'); 
        $dv_id         = $this->input->post('dv_id'); 
        $class_name        = $this->input->post('class_name'); 
        $class_group         = $this->input->post('class_group'); 
       
       
	  
        $this->class_model->insert_cl($teacher_id,$dv_id,$class_name,$class_group); 
        redirect('Classs');
	}

	public function edit_class()
	{
		$id = $this->uri->segment('3'); 
		$data['result'] = $this->class_model->selectOneclass($id);
		$qry_inp1 =  "SELECT * FROM teacher";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_th'] = $query1->result();
		$qry_inp2 =  "SELECT * FROM division";
		$query1 = $this->db->query($qry_inp2); 
        $data['result_dv'] = $query1->result();
    
		$this->load->view('ADMIN FOR ADMIN/class/edit',$data);
	}

	public function Edit_process()
	{
		$teacher_id    = $this->input->post('teacher_id'); 
        $dv_id         = $this->input->post('dv_id'); 
        $class_name        = $this->input->post('class_name'); 
        $class_group         = $this->input->post('class_group'); 
       
        $class_id      = $this->input->post('class_id'); 
     
        
        $this->class_model->edit_pr($teacher_id,$dv_id,$class_name,$class_group,$class_group,$class_id); 
        redirect('Classs');
	}

	public function delete($class_id)
	{
		$result = $this->class_model->delete_pc($class_id);
		if($result!=FALSE)
		{
            redirect('Classs','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('Classs','refresh');
		}

    }

}
?>