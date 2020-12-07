<?php
defined('BASEPATH') OR exit('No direct script access allowed');  
class ui_component Extends CI_controller{

    function __construct(){
        parent::__construct();

        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->view('header');
        $this->load->view('nevbar');




    }

    public function index()     
    {

        $this->load->view('UI_component/ui_tiles');
        $this->load->view('footer_co');

    }

    public function modals()   
    {

        $this->load->view('UI_component/ui_modals');
        $this->load->view('footer_co');

    }

    public function progressbars()   
    {

        $this->load->view('UI_component/ui_progressbars');
        $this->load->view('footer_co');

    }

    public function paginations()     
    {

        $this->load->view('UI_component/ui_paginations');
        $this->load->view('footer_co');

    }

    public function breadcrumbs()    
    {

        $this->load->view('UI_component/ui_breadcrumbs');
        $this->load->view('footer_co');

    }

    public function labelsbadges()    
    {

        $this->load->view('UI_component/ui_labelsbadges');
        $this->load->view('footer_co');

    }

    public function alerts()    
    {

        $this->load->view('UI_component/ui_alerts');
        $this->load->view('footer_co');

    }

    public function sliders()    
    {

        $this->load->view('UI_component/ui_sliders');
        $this->load->view('footer_co');

    }

    public function tabs()    
    {

        $this->load->view('UI_component/ui_tabs');
        $this->load->view('footer_co');

    }

    public function carousel()    
    {

        $this->load->view('UI_component/ui_carousel');
        $this->load->view('footer_co');

    }

    public function nestable()    
    {

        $this->load->view('UI_component/ui_nestable');
        $this->load->view('footer_co');

    }

    public function wells()    
    {

        $this->load->view('UI_component/ui_wells');
        $this->load->view('footer_co');

    }

    public function tour()    
    {

        $this->load->view('UI_component/ui_tour');
        $this->load->view('footer_co');

    }
}
?>