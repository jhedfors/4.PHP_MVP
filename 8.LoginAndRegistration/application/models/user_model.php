<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function login_user($info){
		$this->load->helper('security');
		$email = $info['email'];
		$password = do_hash($info['password']);
		$record = $this->get_record_by_email($email);
		if ($record['password'] == $password ) {
			$this->session->set_userdata('user_data',['id' => $record['id']]);
			return $record;
		}
		else{
			$this->session->set_userdata('errors_login',['Email/Password not valid']);
			redirect('/');
			exit;
		}
	}
	public function register($info){
		$this->load->helper('security');
		$email = $info['email'];
		$password = do_hash($info['password']);
		$record = $this->get_record_by_email($email);
		$query = "INSERT INTO users (first_name, last_name,
							email, password, created_date, modified_date) VALUES (?, ?, ?, ?, NOW(), NOW())";
		$values = [$info['first_name'],$info['last_name'],
							$email,$password];
		return $this->db->query($query,$values);
	}
	public function get_record_by_email($email){
		$query = "SELECT * FROM users WHERE email=?";
		return $this->db->query($query, array($email))->row_array();
	}
}
