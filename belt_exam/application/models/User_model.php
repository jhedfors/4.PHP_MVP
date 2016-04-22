<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function show_all()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}
	public function add($info)
	{

		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, modified_at)  VALUES (?,?,?,?, NOW(), NOW())";

		return $this->db->query($query)->result_array();
	}

}
