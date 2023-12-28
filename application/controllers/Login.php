<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load necessary libraries and models
        $this->load->library('form_validation');
        $this->load->model('Model_Login'); // Your login model
    }

    public function index() {
        $this->load->view('login'); // Your login view file
    }

    public function validate_login() {
        // Form validation rules
        $this->form_validation->set_rules('user_email', 'Email Address', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Validation failed, reload login page with validation errors
            $this->load->view('login');
        } else {
            // Validation passed, attempt login
            $email = $this->input->post('user_email');
            $password = $this->input->post('user_password');

            $login_result = $this->Model_Login->can_login($email, $password);

            if ($login_result === true) {
                // Login successful, redirect to dashboard or private area
                redirect('admin/dashboard');
            } else {
                // Login failed, set flash message and reload login page
                $this->session->set_flashdata('message', 'Invalid email or password.');
                redirect('login');
            }
        }
    }
}