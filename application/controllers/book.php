<?php
class Book extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('book_model');
	}


	/**
	 * Get all books from Database
	 * Pass them to the view 'booklist'
	 */
	public function booklist() {
		$data['book'] = $this->book_model->get_book();	//ohne Argument -> alle Bücher aus DB
		$data['title'] = 'Alle Bücher';

		$this->load->view('/book/booklist',$data);
	}
	
	/**
	 * Get all attributes of one Book
	 * Pass attributes to view 'details'
	 * @param string $id
	 */
	public function details($id = '')
	{
		$book = new Book_model();
		$book->find($id);
		$this->data['book'] = $book;		
		
		$this->load->view('/book/details',$this->data);
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
	
	
	/**
	 * Edit an existing book in Database
	 * Requires function edit_save()
	 * @param string $id
	 */
	public function edit($id = '')
	{		
		$book = new Book_model();
		$book->find($id);
		$this->data['book'] = $book;
		
		$this->load->helper('form');
		$this->load->library('form_validation');
	
		$data['title'] = 'Buch anpassen';
	
		$this->form_validation->set_rules('author','Autor','required');
		$this->form_validation->set_rules('title','Titel','required');
	
		$this->load->view('/book/edit', $this->data);
		
		return;
	}
	/**
	 * Updates the database with changes done in view 'edit'
	 */
	public function edit_save()
	{
		$id = $this->input->post('book_id');
		
		$this->book_model->update_book($id);
		$this->load->view('book/success');
	}
	
	
	/**
	 * Updates the database with changes done in view 'edit'
	 */
	public function remove($id = '')
	{
		
		
		$book = new Book_model();
		$book->find($id);
		$this->data['book'] = $book;
		
		$this->book_model->remove_book($id);
		$this->load->view('book/removed', $this->data);
	}
}