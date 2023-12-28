<?php
class Evisa_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data){
// Inserting in Table(Apply visa) of Database
$this->db->insert('evisa', $data);
}
}
?>