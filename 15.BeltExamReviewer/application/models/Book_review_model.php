<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Book extends CI_Model {
	public function __constructor()
	{
		parent:: __constructor();


	}
	public function show_all_users(){
		return $this->db->get('users')->result_array();
	}
	public function show_user_by_email($email){
		$query = "SELECT * FROM users WHERE email = '$email'";
		return $this->db->query($query)->result_array();
	}
	public function show_user_by_id($id){
		$query = "SELECT * FROM users WHERE id = '$id'";
		return $this->db->query($query)->result_array();
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
	public function add_user($info){
		$query = "insert into users (name, alias, email, password,created_at, modified_at) values(?,?,?,?,NOW(),NOW())";
		return $this->db->query($query, $info);
	}
	public function add_book($info){
		$query = "INSERT INTO books (title,author_id,created_at, modified_at) values (?,?,NOW(),NOW())";
		return $this->db->query($query, $info);
	}

	public function show_all_books(){
		$query = "SELECT * FROM books";
		return $this->db->query($query)->result_array();
	}
	public function add_review($review){
		$query = "INSERT INTO reviews (book_id, user_id, review, star_rating, created_at, modified_at) values(?,?,?,?, NOW(),NOW())";
		return $this->db->query($query, $review);
	}
	public function show_all_reviews(){
		$query = "SELECT * FROM reviews";
		return $this->db->query($query)->result_array();
	}

	public function show_all_books_and_reviews(){
		$query = "SELECT title, star_rating,
		 users.id as user_id, users.name as user_name, review, reviews.created_at as reviewed_on FROM     books
		 LEFT JOIN reviews ON reviews.book_id = books.id LEFT JOIN users ON reviews.user_id = users.id";

			return $this->db->query($query)->result_array();
	}

	public function show_all_reviews_for_book($id){

		$query = "SELECT title, authors.name AS author_name, star_rating, users.id AS user_id,     users.name AS user_name, review,     reviews.created_at AS reviewed_on FROM books
		LEFT JOIN reviews ON reviews.book_id = books.id
		LEFT JOIN users ON reviews.user_id = users.id
		LEFT JOIN authors ON authors.id = books.author_id
		WHERE books.id = '$id'";
		return $this->db->query($query)->result_array();

	}
	public function show_all_reviews_by_user($user_id){
		$query = "SELECT users.id as user_id, alias, users.name, email, title, books.id FROM users
		LEFT JOIN reviews ON users.id = reviews.user_id         LEFT JOIN books ON reviews.book_id = books.id 		LEFT JOIN authors on authors.id = books.author_id     WHERE user_id = $user_id";
		return $this->db->query($query)->result_array();

	}

}
