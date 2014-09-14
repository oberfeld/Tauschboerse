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
		//$this->load->database;		Nicht nötig wegen autoload.php: "$autoload['libraries'] = array('database');"
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
			return $query->result_array();
		}
		$query = $this->db->get_where('books',array('id'=>$id));
		return $query->row_array();
	}
	
	/**
	 * get one or more books out of Dababase.
	 * if no $id is passed to the function, all books will be returned.
	 * @param string $id
	 */
	public function get_book_2($id = FALSE)
	{
		if ($id === FALSE)
		{
			$query = $this->db->get('books');
			return $query;
		}
		$query = $this->db->get_where('books',array('id'=>$id));
		return $query();
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
	
		return $this->db->insert('books',$data);
	}
}