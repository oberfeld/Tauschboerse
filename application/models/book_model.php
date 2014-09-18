<?php
class Book_model extends CI_Model
{
	public $id = 0;
	public $author = '';
	public $title = '';
	public $publisher = '';
	public $YearOfPublication = 0;
	public $edition = 0;
	public $isbn = '';
	public $comment = '';
	public $LastEdited = '';
	
	/**
	 * Konstruktor
	 */
	public function __construct()
	{
		//$this->load->database;		 Nicht nötig wegen autoload.php: "$autoload['libraries'] = array('database');"
	}
	
	
	/**
	 * get one or more books out of Dababase.
	 * if no $id is passed to the function, all books will be returned.
	 * @param string $id
	 */
	public function get_book($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('books');
			return $query;
		}
		$query = $this->db->get_where('books', array('id'=>$id));
		return $query;
	}
	
	/**
	 * Sucht in der DB nach dem Buch mit der entsprechenden ID.
	 * 
	 * @param	int			$id
	 * @return	stdClass	Klasse mit allen DB-Feldern als Attribute
	 */
	public function find($id)
	{
		$this->db->where('id', $id);
		$query = $this->db->get('books', 1);
		
		//public Felder
		$this->id = $query->row()->id;
		$this->author = $query->row()->author;
		$this->title = $query->row()->title;
		$this->publisher = $query->row()->publisher;
		$this->YearOfPublication = $query->row()->YearOfPublication;
		$this->edition = $query->row()->edition;
		$this->isbn = $query->row()->isbn;
		$this->comment = $query->row()->comment;
		$this->LastEdited = $query->row()->LastEdited;

		return $query->row();
	}
	
	/**
	 * Gets all books out of DataBase
	 * @return Query Objekt
	 */
	public function getAll()
	{	
		$this->db->order_by('author', 'asc');
		$query = $this->db->get('books');
	
		return $query;
	} // End of function getAll()
	
	/**
	 * Read Form Data from view 'create' and write this data into database
	 * Entry gets new id automatically
	 */
	public function set_book()
	{	
		$data = array(
				'author' => $this->input->post('author'),
				'title' => $this->input->post('title'),
				'publisher' => $this->input->post('publisher'),
				'YearOfPublication' => $this->input->post('YearOfPublication'),
				'edition' => $this->input->post('edition'),
				'isbn' => $this->input->post('isbn'),
				'comment' => $this->input->post('comment')
		);
	
		return $this->db->insert('books', $data);
	}
	
	/**
	 * Read Form Data from view 'update' and write this data into database
	 * @param string $id
	 */
	public function update_book($id = '')
	{
		$data = array(
				'author' => $this->input->post('author'),
				'title' => $this->input->post('title'),
				'publisher' => $this->input->post('publisher'),
				'YearOfPublication' => $this->input->post('YearOfPublication'),
				'edition' => $this->input->post('edition'),
				'isbn' => $this->input->post('isbn'),
				'comment' => $this->input->post('comment')
		);
		
		$this->db->where('id', $id);
		$this->db->update('books', $data);
	}
	
	/**
	 * Delete certain book in database
	 * @param string $id
	 */
	public function remove_book($id = '')
	{
		$this->db->where('id', $id);
		$this->db->delete('books'); 
	}
}