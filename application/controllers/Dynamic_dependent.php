<?php if (!defined('BASEPATH'))
    EXIT('No direct script access allowed');
class Dynamic_dependent extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('dynamic_dependent_model');

    }
    function index()
    {
        $data['country'] = $this->dynamic_dependent_model->fetch -> country();
        $this->load->view('views/dynamic_dependent', $data);
    }
    function fetch_state()
    {
        if ($this->input->post('country_id')) {
            echo $this->dynamic_dependent_model->fetch_state($this->input->post('country_id'));
        }
    }
    function fetch_visa()
    {
        $country_id = $this->input->post('country_id');
        if ($this->input->post('country_id')) {

            $visadata = $this->dynamic_dependent_model->fetch_visa($country_id);

            echo json_encode($visadata);
        }
        //print_r($_GET);die;


    }
}