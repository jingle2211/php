<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_Login extends CI_Model {

    public function can_login($email, $password) {
        // Your logic to validate the login credentials
        $this->load->library('encryption'); // Load the encryption library here

    $this->db->where('email', $email);
    $query = $this->db->get('tbl_user');
        // Check if the email and password match the database records
        // Perform necessary database queries here
        // if ($row->is_email_verified == 'yes')
        // Example code (replace this with your actual logic):
        $valid_user = $this->db->where('email', $email)
                                ->where('password', $password) // Password 
                                ->get('tbl_user')
                                ->row();

        if ($valid_user) {
            return true; // Valid login
        } else {
            return false; // Invalid login
        }
    }
}