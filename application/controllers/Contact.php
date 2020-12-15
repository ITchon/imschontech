<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class Contact Extends CI_controller{

	function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->helper('form');
        $this->load->view('contact/header');
		$this->load->database(); 
        $this->load->model('model');
        $this->load->model('model_contact');

		$this->model->CheckSession();
		$this->model->block_student();



	}

	public function index() 	
	{
        $contact_id = $this->session->userdata('contact_id');
        $data['cp'] = $this->model_contact->get_contact_profile($contact_id);


        $this->load->view('contact/menu');
        $this->load->view('contact/dashboard',$data);
        $this->load->view('footer');

    }
}
?>