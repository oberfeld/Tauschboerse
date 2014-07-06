<?php
class Book extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('book_model');
	}

	/*
	public function index() {
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archive';

		$this->load->view('templates/header',$data);
		$this->load->view('/news/index',$data);
		$this->load->view('templates/footer',$data);
	}
	*/

	/*
	 public function view($slug)
	 {
	$data['news'] = $this->news_model->get_news($slug);
	}
	*/

	/*
	public function view($slug)
	{
		$data['news_item'] = $this->news_model->get_news($slug);

		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header',$data);
		$this->load->view('/news/view',$data);
		$this->load->view('templates/footer',$data);
	}
	*/

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Buch eintragen';

		$this->form_validation->set_rules('author','Autor','required');
		$this->form_validation->set_rules('title','Titel','required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/header',$data);
			$this->load->view('/book/create');
			$this->load->view('templates/footer',$data);
		}
		else
		{
			$this->book_model->set_book();
			$this->load->view('book/success');
		}
	}
}