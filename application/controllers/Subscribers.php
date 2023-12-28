<?php

class Subscribers extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('subscribers_model');
    }

    public function subscribe() {
        // Handle subscription form submission
        $email = $this->input->post('email');
        $name = $this->input->post('name');

        // Check if the email already exists in the database
        if (!$this->subscribers_model->isEmailExists($email)) {
            $this->subscribers_model->subscribe($email, $name);
            // Redirect or display success message
            echo '<script type="text/javascript">';
            echo ' alert("Successfully Subscribe")';  //not showing an alert box.
            echo '</script>';
        } else {
            echo 'You Have already Subscribed';
            // Redirect back to the form with an error message
        }
    }
    public function unsubscribe() {
        // Handle unsubscribe form submission
        $email = $this->input->post('email');
        $this->subscribers_model->unsubscribe($email);
        // Redirect or display success message
    }

    public function preferences() {
        // Load subscriber's preferences
        $email = 'sasikumar95044@gmail.com'; // Get this from the logged-in user's session
        $subscriber = $this->subscribers_model->getSubscriberByEmail($email);
        
        // Load view to manage preferences with $subscriber data
    }
}
