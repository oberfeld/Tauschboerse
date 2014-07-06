<?php
class Book_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
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
	
	public function set_book()
	{	
		$data = array(
				'author' => $this->input->post('author'),
				'title' => $this->input->post('title'),
				'isbn' => $this->input->post('isbn'),
				'YearOfPublication' => $this->input->post('YearOfPublication'),
				'comment' => $this->input->post('comment')
		);
	
		return $this->db->insert('books',$data);
	}
}