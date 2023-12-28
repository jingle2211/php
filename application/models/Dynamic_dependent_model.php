<?php
class dynamic_dependent_model extends CI_Model
{
    function fetch_country()
    {
        $this->db->order_by("country_name", "ASC");
        $query = $this->db->get("country");
        return $query->result();
    }
    function fetch_state($country_id)
    {
        $this->db->where('country_id', $country_id);
        $this->db->order_by('state_name', 'ASC');
        $query = $this->db->get('state');
        $output = '<option value= ""> select state </option>';
        foreach ($query->result() as $row) {
            $output .= '<option value = " ' . $row->state_id . '">' . $row->state_name . '</OPTION>';
        }
        return $output;
    }

    function fetch_visa($country_id)
    {
        $query = $this->db->get_where('visatype', array('country_id' => $country_id));
        return $query->result_array();

    }

}