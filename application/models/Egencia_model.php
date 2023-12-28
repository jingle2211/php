<?php
class Egencia_model extends CI_Model
{
    public function save_application($data)
    {
        // Save the data to the 'visa_applications' table in the database
        $this->db->insert('egencia_application', $data);
    }
}
