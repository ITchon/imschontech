<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class Bilateral extends CI_Controller {
 
 
public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('model_ajax');
        $this->load->view('bilateral/header');
        $this->load->view('bilateral/nevbar');

    }
 
 
 public function index()
    {
        
        $this->load->view('ADMIN FOR ADMIN/dashboard/index');
        $this->load->view('bilateral/footer_2020');

    }


 
 
}