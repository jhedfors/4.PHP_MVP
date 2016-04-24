<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_model extends CI_Model {
	public function __constructor()
	{
		parent:: __constructor();

	}
	public function show_all(){
		return $this->db->get('users')->result_array();
	}
	public function show_user_by_email($email){
		$query = "SELECT * FROM users WHERE email = '$email'";
		return $this->db->query($query)->row_array();
	}
	public function show_by_id($id){
		$query = "SELECT * FROM users WHERE id = '$id'";
		return $this->db->query($query)->result_array();
	}
  public function register($info){
    $query = "insert into users (name, alias, email, password,created_at, modified_at) values(?,?,?,?,NOW(),NOW())";
    return $this->db->query($query, $info);
  }
  public function delete_user(){
    //needed?
  }


}
