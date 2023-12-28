<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function getUserAccessRoleByID($id) {
        $query = $this->db->get_where('tbl_user_role', array('id' => $id));
        $row = $query->row_array();
        return $row['user_role'];
    }
    public function get_user_by_email_password($email, $password) {
        $md5Password = md5($password);
        $query = $this->db->where('email', $email)
                          ->where('password', $md5Password)
                          ->get('tbl_users');
        return $query->row_array();
    }
}
