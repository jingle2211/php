<?php
class visa_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();  
    }

    function getcountry() {
        $query = $this->db->get('countries');
        $result = $query->result();

        return $result;
    }
    
    function getCategory()
    {
        $query = $this->db->get('visatype');
        $result = $query->result();

        $cat_id = array('-CHOOSE-');
        $cat_name = array('-CHOOSE-');
        
        for ($i = 0; $i < count($result); $i++)
        {
            array_push($cat_id, $result[$i]->country_id);
            array_push($cat_name, $result[$i]->name);
        }
        return array_combine($cat_id, $cat_name);
    }

function insertVisa($country_id, $name)
{
    $visaData = ['country_id' => $country_id,
                 'name'       => $name
                ];
                //print_r( $visaData); die;
    $result = $this->db->insert('visatype',$visaData);
    return $result;
}

}
?>