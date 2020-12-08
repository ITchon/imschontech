<?php

	class Logout extends CI_Controller {

		function __construct(){
			parent::__construct();
		
			$this->load->library('session');
		}
    function index()
    {
    	$this->session->unset_userdata('user_id');

       // $this->session->session_destroy();
        redirect('login','refresh');
    }
}

?>