<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class manage_train Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('train_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('header');
        $this->load->view('nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT tn.t_id , 
							cp.company_name , 
							std.fname , 
							std.lname , 
							ct.name , 
							tn.start_date , 
							tn.end_date , 
							tn.status , 
							tn.note FROM train AS tn
					INNER JOIN company AS cp ON cp.company_id = tn.company_id
					INNER JOIN student AS std ON   std.std_id = tn.std_id
					INNER JOIN contact AS ct ON ct.contract_id = tn.contract_id";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $data['result_g'] = $this->train_model->train();
		$this->load->view('admin/train/view',$data);
		$this->load->view('admin/footer_2020');
	
	}
	public function insert()
	{
		$qry_inp1 =  "SELECT * FROM student";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_std'] = $query1->result();
		$qry_inp2 =  "SELECT * FROM company";
		$query1 = $this->db->query($qry_inp2); 
		$data['result_cp'] = $query1->result();
		$qry_inp1 =  "SELECT * FROM contact";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_ct'] = $query1->result();
		$this->load->view('admin/train/insert',$data);
	}

	public function insert_p()
	{
		$company_id    = $this->input->post('company_id'); 
        $std_id    = $this->input->post('std_id');
        $contract_id    = $this->input->post('contract_id');
        $start_date      = $this->input->post('start_date');
		$end_date      = $this->input->post('end_date');
		$status      = $this->input->post('status');
		$note      = $this->input->post('note');

        $this->train_model->insert_p($company_id ,$std_id ,$contract_id ,$start_date ,$end_date ,$status ,$note); 
        redirect('manage_train');
	}

	public function edit()
	{
		$id = $this->uri->segment('3'); 
        $data['result'] = $this->train_model->selectOnetrain($id);
        $qry_inp1 =  "SELECT * FROM student";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_std'] = $query1->result();
		$qry_inp2 =  "SELECT * FROM company";
		$query1 = $this->db->query($qry_inp2); 
		$data['result_cp'] = $query1->result();
		$qry_inp1 =  "SELECT * FROM contact";
		$query1 = $this->db->query($qry_inp1); 
		$data['result_ct'] = $query1->result();
		$this->load->view('admin/train/edit',$data);
	}

	public function edit_p()
	{
		$company_id    = $this->input->post('company_id'); 
        $std_id    = $this->input->post('std_id');
        $contract_id    = $this->input->post('contract_id');
        $start_date      = $this->input->post('start_date');
		$end_date      = $this->input->post('end_date');
		$status      = $this->input->post('status');
		$note      = $this->input->post('note');
		
	    $t_id 	  = $this->input->post('t_id');
        $this->train_model->edit_p($company_id ,$std_id ,$contract_id ,$start_date ,$end_date ,$status ,$note ,$t_id); 
        redirect('manage_train');
	}

	public function delete_p($t_id)
	{
		$result = $this->train_model->del_p($t_id);
		if($result!=FALSE)
		{
            redirect('manage_train','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('manage_train','refresh');
		}

	}
}
?>