<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	function __construct()
	{
	parent::__construct();
	$this->load->model('news_model');
	 }


	public function index()
	{
		// $this->load->helper('url');
		
		$data ['title'] = 'Welcome Rudra';
		 $data ['allnews'] = $this->news_model->get_news();
		$data ['users'] = array('ram','shyam','mohan');
		
		$this->load->view('news/index', $data);
	
	}

	public function add(){
		$username = 'Manoj';
		$email = 'manoj@gmail.com';

		$newsdata = array(
			'username' => $username,
			'email' => $email,
			'active' => '1'	
		);

		$news_id = $this->news_model->insert_news($newsdata);
		$this->session->set_flashdata('message','Record has been added');
		redirect('news');
	}

	// public function first($param1, $param2)
	// {
	// 	echo 'Details News'.$param1. ''$param2;
	// }
}