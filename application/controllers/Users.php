<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{
    public function __construct()
	{
	    parent::__construct(); 
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('users_model');
	 }

    public function signup(){
        $data ['title'] = 'Sign Up';
        $this->form_validation->set_rules('first_name', 'first_name', 'trim|required');
        $this->form_validation->set_rules('email', 'email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('confpass', 'confirm password', 'required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        if ($this->form_validation->run() == false){
            $this->load->view('header', $data);
            $this->load->view('users/signup', $data);
            $this->load->view('footer', $data);
        } else {
            //echo '<pre>';
            //print_r($this->input->post());
            $userdata = array(
                'first_name' => $this->input->post('first_name', true),
                'last_name' => $this->input->post('last_name', true),
                'email' => $this->input->post('email', true),
                'password' => md5($this->input->post('password', true)),
                'created_at' => date('Y-m-d H-i-s', time()),
            );

            $this->users_model->save($userdata);
            $this->session->set_flashdata('message','Registration successful.');
            redirect('users/login');
        }
        
     }

     private function logged_in()
    {
        if( ! $this->session->userdata('authenticated')){
            redirect('users/login');
        }
    }
    
    public function login()
    {
        $data['title'] = "Login";
        
        $this->form_validation->set_rules('email', 'email', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'required');
        
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        
        if($this->form_validation->run() == false){
            $this->load->view('header', $data);
            $this->load->view('users/login', $data);
            $this->load->view('footer', $data);
        } 
        else {
            $email = $this->security->xss_clean($this->input->post('email'));
            $password = $this->security->xss_clean($this->input->post('password'));
            
            $user = $this->users_model->login($email, $password);
            
            if($user){
                $userdata = array(
                    'id' => $user->id,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'authenticated' => TRUE
                );
                $this->session->set_userdata($userdata);
                 
                redirect('dashboard');
            }
            else {
                $this->session->set_flashdata('message', 'Invalid email or password');
                redirect('users/login');
            }
        }
    }
    
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('users/login');
    }


}