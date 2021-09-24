<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
     public function __construct()
	{
	parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
	 }

     public function signup(){
        $data ['title'] = 'Sign Up';
        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('confpass', 'confirm password', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->load->view('header', $data);
        $this->load->view('users/signup', $data);
        $this->load->view('footer', $data);
     }
}