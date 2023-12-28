<?php
    class Add_model extends CI_Model {

        protected $table;

        function __construct() {
            parent::__construct();
            $this->table = 'user_depart';
        }

        function form_insert($data){
            $this->db->insert($this->table, $data);
        }
        

    }