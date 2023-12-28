<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

 
	function __construct() {
        parent::__construct(); 
        $this->load->model("Model_Dashboard");
        $this->load->model(array('Model_Login',"Model_Front"));
    }
	
	public function index()
	{
		$data['details'] = $this->Model_Dashboard->get_userdata();
		$this->load->view('user-profile',$data);
	}

  // edit user profile 
	public function edituser($id)
	{
		$data['data'] = $this->Model_Dashboard->get_userdata_edit($id);
		$this->load->view('user-edit', $data);
	}

	public function update_user()
	{
		if ($this->Model_Dashboard->deleteuseremail()) {
			if ($this->Model_Login->mail_exists($this->input->post('email'))) {
			   $this->session->set_flashdata('message', 'Email already exists'); 
			   redirect("Dashboard");
			}else{
				if ($this->Model_Dashboard->update_users()) {
				    $this->session->set_flashdata('message', 'Successfully Updated');
				    redirect('Dashboard');
				}else{ 
					redirect('Dashboard');
				}
			}
		}
	}
}
