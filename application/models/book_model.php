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
		$this->load->database();
	}
	
	/*
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
	*/
	/**
	 * Gets all books out of DataBase
	 * @return Query Objekt
	 */
	public static function getAll()
	{
		$CI =& get_instance();
	
		$CI->db->order_by('author', 'asc');
		$query = $CI->db->get('books');
	
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