<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function show_all()
	{
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}

	public function login($post){

		$record = $this->show_by_username($post['username']);

		if($record['password'] == $post['password']){
			$this->session->set_userdata('active_id' ,$record['id']);
			return true;
		}
		else{


			return false;
		}

	}

	public function register($post){

			$record = $this->show_by_username($post['username']);

// var_dump($record);
// die();
		 if(!$record){
			 die('here');
		}
			$query = "insert into users (name, username, password,created_at, modified_at) values(?,?,?,NOW(),NOW())";

			$values = ["{$post['name']}","{$post['username']}","{$post['password']}"];

			$this->db->query($query, $values);



	}

	public function show_by_username($username){
		$query = "SELECT * FROM users WHERE username = '$username'";
		return $this->db->query($query)->row_array();
	}
	public function add($info)
	{

		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, modified_at)  VALUES (?,?,?,?,NOW(),NOW())";

		return $this->db->query($query,$info);
	}

}
