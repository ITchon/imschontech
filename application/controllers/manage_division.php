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
        $id = $this->uri->segment('3');
        $query = $this->db->query("SELECT * FROM division WHERE dv_id = '$id'");
        $data['result_ed'] = $query->result();

		$this->load->view('ADMIN FOR ADMIN/division/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');

    }
    

	public function insert_dv_p()
	{
		$dv_name    = $this->input->post('dv_name'); 
        
	  
        $this->division_model->insert_dv($dv_name); 
        redirect('manage_division');
	}

	public function edit_division()
	{	
		// $qry_inp =  "SELECT * FROM division";
        // $query = $this->db->query($qry_inp); 
		// $data['result'] = $query->result();
		$id = $this->uri->segment('3'); 
        $data['result_ed'] = $this->division_model->selectOnedivision($id);

		$this->load->view('ADMIN FOR ADMIN/division/edit',$data);
		// $this->load->view('ADMIN FOR ADMIN/footer_2020');
	}

	public function edit_p()
	{
		$dv_name    = $this->input->post('dv_name'); 
       
	    $dv_id 	  = $this->input->post('dv_id');
        $this->division_model->update_division($dv_name ,$dv_id); 

		redirect('manage_division');
	}

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