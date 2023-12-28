<?php

class Subscribers_model extends CI_Model {
    public function isEmailExists($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('subscribers');
        return $query->num_rows() > 0;
    }
    public function subscribe($email, $name) {
        $data = array(
            'email' => $email,
            'name' => $name
        );
        $this->db->insert('subscribers', $data);
    }

    public function unsubscribe($email) {
        $this->db->where('email', $email);
        $this->db->delete('subscribers');
    }

    public function getSubscriberByEmail($email) {
        $query = $this->db->get_where('subscribers', array('email' => $email));
        return $query->row();
    }

    public function getSubscribedSubscribers() {
        $this->db->where('subscribed', 1);
        $query = $this->db->get('subscribers');
        return $query->result();
    }

}