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
		$username = 'Basu';
		$email = 'basu@gmail.com';

		$newsdata = array(
			'username' => $username,
			'email' => $email,
			'active' => '1'	
		);

		$news_id = $this->news_model->insert_news($newsdata);
		$this->session->set_flashdata('message','Record has been added');
		redirect('news');
	}

	public function edit($id){
		$username = 'Basu';
		$email = 'basoo@gmail.com';

		$newsdata = array(
			'username' => $username,
			'email' => $email,
			'active' => '0'	
		);

		$news_id = $this->news_model->update_news($id,$newsdata);
		$this->session->set_flashdata('message','Record has been updated');
		redirect('news');
	}

	public function delete($id){
		$this->news_model->del_news($id);
		$this->session->set_flashdata('message','Record has been deleted');
		redirect('news');
	}

	public function details($id){
		$news = $this->news_model->gett_news($id);
		$data ['title'] = $news->username;
		//$data ['title'] = $news['username'];
		$data ['news'] = $news;
		$this->load->view('news/details', $data);
    }
}