<?php
class Book extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('book_model');
	}

	
	/**
	 * Get all books from Database
	 * Pass them to the view 'index'
	 * Use get_book() or get_book_2 with corresponding foreach-loop in view
	 */
	public function booklist() {
		//$data['book'] = $this->book_model->get_book();	//ohne Argument -> alle Bücher aus DB
		$data['book'] = $this->book_model->get_book_2();	//ohne Argument -> alle Bücher aus DB
		$data['title'] = 'Alle Bücher';

		$this->load->view('/book/booklist',$data);
	}
	
	public function details($id=0){
		
		$book = new Book_model();
		
		$id = (string)$id;
		
		$data['book'] = $this->book_model->get_book_2($id);
		$data['title'] = 'Details';
		
		
		
		$this->load->view('/book/details',$data);
	}
	

	/**
	 * Save new book in Database
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
			$this->load->view('/book/create');
		}
		else
		{
			$this->book_model->set_book();
			$this->load->view('book/success');
		}
	}
}