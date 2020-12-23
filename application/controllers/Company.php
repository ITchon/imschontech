<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Company Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->model('company_model');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
        $this->load->view('ADMIN FOR ADMIN/header');
        $this->load->view('ADMIN FOR ADMIN/nevbar');




	}

	public function index() 	
	{
		$qry_inp =  "SELECT * FROM company";
        $query = $this->db->query($qry_inp); 
        $data['result'] = $query->result();
        // $id = $this->input->post('id');
        // $query = $this->db->query("SELECT * FROM division WHERE dv_id = $id");
        // $data['result_edit'] = $query->result();
		$this->load->view('ADMIN FOR ADMIN/company/view',$data);
		$this->load->view('ADMIN FOR ADMIN/footer_2020');
    }

    public function insert_company()
	{
		$this->load->library('googlemaps');

		$config['center'] = '13.739330088358768, 100.50712938157314';
		$config['zoom'] = '9';
		$this->googlemaps->initialize($config);
			
		$marker = array();
		$marker['position'] = '13.739330088358768, 100.50712938157314';
		$marker['draggable'] = true;

		$marker['ondragend'] = 'document.getElementById(\'position\').value = event.latLng.lat() + \', \' + event.latLng.lng()';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('ADMIN FOR ADMIN/company/insert',$data);
	}


	public function insert_cp_p()
	{
        $company_name    = $this->input->post('company_name'); 
        $address         = $this->input->post('address'); 
        $province        = $this->input->post('province'); 
        $zipcode         = $this->input->post('zipcode'); 
        $tel             = $this->input->post('tel'); 
        $latlng          = $this->input->post('latlng'); 
       
	  
        $this->company_model->insert_cp($company_name,$address,$province,$zipcode,$tel,$latlng ); 
        redirect('Company');
	}

	public function edit_company()
	{
		
		$id = $this->uri->segment('3'); 
		$data_company = $this->company_model->selectOnecompany($id);
		$data['result'] = $data_company;
		$this->load->library('googlemaps');

		$config['center'] = $data_company[0]->latlong;
		$config['zoom'] = '9';
		$this->googlemaps->initialize($config);
			
		$marker = array();
		$marker['position'] = $data_company[0]->latlong;
		$marker['draggable'] = true;

		$marker['ondragend'] = 'document.getElementById(\'position\').value = event.latLng.lat() + \', \' + event.latLng.lng()';
		$this->googlemaps->add_marker($marker);
		$data['map'] = $this->googlemaps->create_map();
		$this->load->view('ADMIN FOR ADMIN/company/edit',$data);
	}

	public function edit_cp_p()
	{
		$company_name    = $this->input->post('company_name'); 
        $address         = $this->input->post('address'); 
        $province        = $this->input->post('province'); 
        $zipcode         = $this->input->post('zipcode'); 
        $tel             = $this->input->post('tel'); 
        $company_id      = $this->input->post('company_id'); 
        $latlng      = $this->input->post('latlng'); 
     
        
        $this->company_model->edit_cp($company_name,$address,$province,$zipcode,$tel,$company_id,$latlng); 
        redirect('Company');
	}

	public function delete_company_p($company_id)
	{
		$result = $this->company_model->del_cp_p($company_id);
		if($result!=FALSE)
		{
            redirect('Company','refresh');
		}
		else
		{
		    echo "<script>alert('Something wrong')</script>";
        	redirect('Company','refresh');
		}

    }

}
?>