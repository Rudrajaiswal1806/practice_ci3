<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{
    public function save ($userdata) {
        $this->db->insert('users', $userdata);
        return $this->db->insert_id();
    }
    public function login($email, $password)
    {
        $this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $this->db->where('active', 1);
        $query = $this->db->get('users');

        if($query->num_rows() == 1) {
            return $query->row();
        }

        return false;
    }
}