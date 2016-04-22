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
		return $this->db->query($query, $values);
	}
	public function show_all_authors(){
		$query = "SELECT * FROM authors";
		return $this->db->query($query)->result_array();
	}
	public function add_book($info){
		$query = "INSERT INTO books (title,author_id,created_at, modified_at) values (?,?,NOW(),NOW())";
		return $this->db->query($query, $info);
	}

	public function show_all_books(){
		$query = "SELECT * FROM books";
		return $this->db->query($query)->result_array();
	}

}
