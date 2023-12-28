<?php
class Egencia extends CI_Controller 
{
	public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	//load database libray manually
	$this->load->database();
	
	//load Model
	$this->load->model('Hello_Model');
	}

    public function index()
    {
        $this->load->view('Egencia/index');
    }
	 
    public function contact()
    {
        $this->load->view('Egencia/contact');
    }

    public function visa_application()
    {
        $this->load->view('Egencia/visa_application');
    }
    public function submit_form()
    {
        $data = array(
            'full_name' => $this->input->post('full_name'),
            'passport_number' => $this->input->post('passport_number'),
            'nationality' => $this->input->post('nationality'),
            // Add other form fields here
            'Contact' => $this->input->post('Contact'),
            'email' => $this->input->post('email'),
            'DOB' => $this->input->post('nationality'),
            'Place' => $this->input->post('DOB'),
            'Region' => $this->input->post('Region'),
            'country' => $this->input->post('country'),
            'visa_type' => $this->input->post('visa_type'),
            'exp_date' => $this->input->post('exp_date'),
            'billing' => $this->input->post('billing'),
            'chkAgreeTerm' => $this->input->post('chkAgreeTerm'),
        
        );

        // Process the data as required, e.g., save to the database, send an email, etc.
        $this->load->model('Egencia_model');
        $this->Egencia_model->save_application($data);
        // Load a success view or redirect to a thank-you page
        $this->load->view('Egencia/visa_application', $data);

        
        // Send email
        $this->load->library('email');
        $this->email->from('sasikumar95044@gmail.com', 'Your Name');
        $this->email->to('sasikumar95044@gmail.com');
        $this->email->subject('New Visa Application');
        $this->email->message('A new visa application has been submitted.');

        if ($this->email->send()) {
            // Email sent successfully
            redirect('Egencia');
        } else {
            // Email sending failed
            show_error($this->email->print_debugger());
        }
    }

}

?>