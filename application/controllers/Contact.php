<?php

class Contact extends CI_Controller {

function __construct() {
parent::__construct();
$this->load->library('email');
$this->load->model('Evisa_model');
}
function Evisa_apply() {
//Including validation library
$this->load->library('form_validation');
$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
$this->form_validation->set_rules('Surname', 'Surname', 'required');
$this->form_validation->set_rules('name', 'name', 'required');
$this->form_validation->set_rules('passport', 'passport','required');
$this->form_validation->set_rules('email', 'email','required|valid_email');
$this->form_validation->set_rules('phone', 'phone', 'required|min_length[10]|max_length[50]');
$this->form_validation->set_rules('visatype', 'visatype', 'required');
$this->form_validation->set_rules('visacountry', 'visacountry', 'required');


if ($this->form_validation->run() == FALSE) {
$this->load->view('Evisa_apply');
} else {
//Setting values for tabel columns
$data = array(
'Surname' => $this->input->post('Surname'),
'name' => $this->input->post('name'),
'passport' => $this->input->post('passport'),
'email' => $this->input->post('email'),
'phone' => $this->input->post('phone'),
'visatype' => $this->input->post('visatype'),
'visacountry' => $this->input->post('visacountry')
);
//Transfering data to Model
$this->Evisa_model->form_insert($data);
$data['message'] = 'Applyed Successfully';
//Loading View

$this->load->view('Evisa_apply', $data);
}
}

public function sendEmail($mailData){
    // Load the email library
    $this->load->library('email');
    
    // Mail config
    $to = 'sasikumar95044@gmail.com';
    $from = 'setukumarbihta@gmail.com';
    $fromName = 'setu';
    $mailSubject = 'Visa Request Submitted by '.$mailData['name'];
    
    // Mail content
    $mailContent = '
        <h2>Visa Request Submitted</h2>
        <p><b>Name: </b>'.$mailData['name'].'</p>
        <p><b>Email: </b>'.$mailData['email'].'</p>
        <p><b>phone: </b>'.$mailData['phone'].'</p>
        <p><b>visatype: </b>'.$mailData['visatype'].'</p>
        <p><b>visacountry: </b>'.$mailData['visacountry'].'</p>
    ';
        
    $config['mailtype'] = 'html';
    $this->email->initialize($config);
    $this->email->to($to);
    $this->email->from($from, $fromName);
    $this->email->subject($mailSubject);
    $this->email->message($mailContent);
    
    // Send email & return status
    return $this->email->send()?true:false;
}

}

?>