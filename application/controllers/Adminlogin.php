<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {
	function __construct() {
        parent::__construct(); 
      // $this->load->library('encryption');
       $this->load->model('Model_Admin');
    }
/////////////////    Admin Login Function  //////////////////    
	public function index()
	{ 
		
if($this->session->userdata('admin')):
redirect('Admin/dashboard');
endif; /// login redirect

	$this->load->view('admin/login');
if($this->input->post()):

if($r = $this->Model_Admin->login($this->input->post())):

	$this->session->set_userdata('admin',$r['email']);
	$this->session->set_flashdata('success',"Login Successfully !!");
	redirect('Admin/dashboard');
else:
	$this->session->set_flashdata('error',"Invalid Username or Password");
	redirect('Adminlogin');
endif;
endif;
	}
 
}