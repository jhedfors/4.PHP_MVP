<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reviews_model extends CI_Model {
	public function __constructor(){
		parent:: __constructor();

	}
	public function add($review){
		$query = "INSERT INTO reviews (book_id, user_id, review, star_rating, created_at, modified_at) values(?,?,?,?, NOW(),NOW())";
		return $this->db->query($query, $review);
	}
	public function show_all(){
		$query = "SELECT * FROM reviews";
		return $this->db->query($query)->result_array();
	}
  public function show_by_book_id($id){

    $query =
			"SELECT books.id as book_id, title, authors.name AS author_name,authors.id as author_id, star_rating, users.id AS user_id, users.name AS user_name, reviews.id as review_id, review,
	    reviews.created_at AS reviewed_on
			FROM books
			LEFT JOIN reviews ON reviews.book_id = books.id
			LEFT JOIN users ON reviews.user_id = users.id
			LEFT JOIN authors ON authors.id = books.author_id
			WHERE books.id = ?;";
		$values =[$id];
    return $this->db->query($query,$values)->result_array();

  }

	public function show_for_all_books(){
		$query =
			"SELECT
	    books.id as book_id,title, reviews.id as review_id, star_rating, users.id
			as user_id, users.name as user_name, review, reviews.created_at as reviewed_on FROM books
			LEFT JOIN
	    reviews ON reviews.book_id = books.id
			LEFT JOIN
	    users ON reviews.user_id = users.id
			ORDER BY reviewed_on DESC;";

			return $this->db->query($query)->result_array();
	}


	public function show_by_user_id($user_id){
		$query = "SELECT users.id as user_id, alias, users.name, email, title, books.id FROM users
		LEFT JOIN reviews ON users.id = reviews.user_id         LEFT JOIN books ON reviews.book_id = books.id
		LEFT JOIN authors on authors.id = books.author_id     WHERE user_id = $user_id";
		return $this->db->query($query)->result_array();
	}
	public function delete($id){
		$query = "DELETE FROM reviews WHERE id=$id";
		$this->db->query($query);
	}

}
