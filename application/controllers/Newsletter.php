<?php

class Newsletter extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('subscribers_model');
        $this->load->library('email');
    }

    public function send_emails() {
        // Fetch all subscribed emails from the database
        $subscribers = $this->subscribers_model->getSubscribedSubscribers();

        foreach ($subscribers as $subscriber) {
            $email = $subscriber->email;
            $subject = 'Newsletter Update';
            $message = 'Hello ' . $subscriber->name . ',<br>Here is your newsletter update!';

            $this->email->clear();
            $this->email->to($email);
            $this->email->from('setukumar@jingleinfo.com', 'IVS_Visa');
            $this->email->subject($subject);
            $this->email->message($message);

            if ($this->email->send()) {
                // Email sent successfully
                echo 'Email sent to: ' . $email . '<br>';
            } else {
                // Email sending failed
                echo 'Email sending failed for: ' . $email . '<br>';
                echo $this->email->print_debugger() . '<br>';
            }
        }
    }
}
