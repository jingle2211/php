<?php

class Add extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Add_model');
        $this->load->model(array('form','url','html'));
        $this->load->databae();
		
    }

    function add_user() {
		$this->load->library('form_validation');
		
	   
    }

}