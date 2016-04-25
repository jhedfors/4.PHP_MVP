<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books_model extends CI_Model {
	function __constructor()
	{
		parent:: __constructor();
    $this->load->library('session');
    $this->load->helper('security');

	}
	public function add_author($author){
		$query = "INSERT into authors (name, created_at, modified_at) values (?,NOW(),NOW());";
		$values = [$author];
	 	$this->db->query($query, $values);
		return $this->db->insert_id();
	}
	public function show_all_authors(){
		$query = "SELECT * FROM authors";
		return $this->db->query($query)->result_array();
	}
	public function add_book($info){
		$query = "INSERT INTO books (title,author_id,created_at, modified_at) values (?,?,NOW(),NOW())";
		$this->db->query($query, $info);
		return $this->db->insert_id();

	}

	public function show_all_books(){
		$query = "SELECT * FROM books ORDER BY title";
		return $this->db->query($query)->result_array();
	}
	public function show_all_books_by_author($id){
		$query = "SELECT * FROM books WHERE author_id = ?";
		$values = [$id];
		return $this->db->query($query,$values)->result_array();
	}
	public function delete($id){
		$query = "DELETE FROM books WHERE id=$id";
		$this->db->query($query);
	}
	public function delete_author($id){
		$query = "DELETE FROM authors WHERE id=$id";
		$this->db->query($query);
	}

}
