<?php
//ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class SubmitController extends CI_Controller {
    public function submit_data() {
        // Load the form validation library
        $this->load->library('form_validation');

        // Set validation rules
        $this->form_validation->set_rules('email', 'email', 'required|valid_email');
        $this->form_validation->set_rules('first_name', 'first_name', 'required');
        $this->form_validation->set_rules('last_name', 'last_name', 'required');
        $this->form_validation->set_rules('middle_name', 'middle_name');
        $this->form_validation->set_rules('former_name', 'former_name');
        $this->form_validation->set_rules('gender', 'gender');
        $this->form_validation->set_rules('citizenship', 'citizenship');
        $this->form_validation->set_rules('residency', 'residency');
        $this->form_validation->set_rules('permanent_residency', 'permanent_residency');
        $this->form_validation->set_rules('date_of_birth', 'date_of_birth');
        $this->form_validation->set_rules('birth_city', 'birth_city');
        $this->form_validation->set_rules('state', 'state');
        $this->form_validation->set_rules('country', 'country');
        $this->form_validation->set_rules('home_address', 'home_address');
        $this->form_validation->set_rules('home_address1', 'home_address1');
        $this->form_validation->set_rules('city', 'city');
        $this->form_validation->set_rules('state1', 'state1');
        $this->form_validation->set_rules('pin_code', 'pin_code');
        $this->form_validation->set_rules('mobile', 'mobile');
        $this->form_validation->set_rules('employment_status', 'employment_status');
        $this->form_validation->set_rules('work_add', 'work_add');
        $this->form_validation->set_rules('work_add1', 'work_add1');
        $this->form_validation->set_rules('position', 'position');
        $this->form_validation->set_rules('work_mobile', 'work_mobile');
        $this->form_validation->set_rules('school_address', 'school_address');
        $this->form_validation->set_rules('school_address1', 'school_address1');
        $this->form_validation->set_rules('city1', 'city1');
        $this->form_validation->set_rules('state2', 'state2');
        $this->form_validation->set_rules('pincode1', 'pincode1');
        $this->form_validation->set_rules('school_name', 'school_name');
        $this->form_validation->set_rules('school_mobile', 'school_mobile');
        $this->form_validation->set_rules('pasport_no', 'pasport_no');
        $this->form_validation->set_rules('issued_at', 'issued_at');
        $this->form_validation->set_rules('date_of_issue', 'date_of_issue');
        $this->form_validation->set_rules('expire_date', 'expire_date');
        $this->form_validation->set_rules('notification', 'notification');
        $this->form_validation->set_rules('sms_no', 'sms_no');

        if ($this->form_validation->run() == FALSE) {
            // Form validation failed, display the form again with validation errors
            $this->load->view('user_registration');
        } else {
            // Form validation passed, insert the data into the database
            $data = array(
                'email' => $this->input->post('email'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'middle_name' => $this->input->post('middle_name'),
                'former_name' => $this->input->post('former_name'),
                'gender' => $this->input->post('gender'),
                'citizenship' => $this->input->post('citizenship'),
                'residency' => $this->input->post('residency'),
                'permanent_residency' => $this->input->post('permanent_residency'),
                'date_of_birth' => $this->input->post('date_of_birth'),
                'birth_city' => $this->input->post('birth_city'),
                'state' => $this->input->post('state'),
                'country' => $this->input->post('country'),
                'home_address' => $this->input->post('home_address'),
                'home_address1' => $this->input->post('home_address1'),
                'city' => $this->input->post('city'),
                'state1' => $this->input->post('state1'),
                'pin_code' => $this->input->post('pin_code'),
                'mobile' => $this->input->post('mobile'),
                'employment_status' => $this->input->post('employment_status'),
                'work_add' => $this->input->post('work_add'),
                'work_add1' => $this->input->post('work_add1'),
                'position' => $this->input->post('position'),
                'work_mobile' => $this->input->post('work_mobile'),
                'school_address' => $this->input->post('school_address'),
                'school_address1' => $this->input->post('school_address1'),
                'city1' => $this->input->post('city1'),
                'state2' => $this->input->post('state2'),
                'pincode1' => $this->input->post('pincode1'),
                'school_name' => $this->input->post('school_name'),
                'school_mobile' => $this->input->post('school_mobile'),
                'pasport_no' => $this->input->post('pasport_no'),
                'issued_at' => $this->input->post('issued_at'),
                'date_of_issue' => $this->input->post('date_of_issue'),
                'expire_date' => $this->input->post('expire_date'),
                'notification' => $this->input->post('notification'),
                'sms_no' => $this->input->post('sms_no'),              
            );

            // Load the database library
            $this->load->database();

            // Insert data into the database table
            $this->db->insert('tbl_user_profile', $data);

            // Display success message or redirect to a success page
            echo "Data submitted successfully!";
        }
    }
}
?>
