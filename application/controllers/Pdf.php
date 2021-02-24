<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pdf extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->database(); 
        $this->load->model('model');
	}

	public function index()
	{

		require_once(APPPATH.'../vendor/autoload.php');
		
		$mpdf = new \Mpdf\Mpdf();
		$html = $this->load->view('test',[],true);
		$mpdf->WriteHTML($html);
		$mpdf->Output();
	}



}
