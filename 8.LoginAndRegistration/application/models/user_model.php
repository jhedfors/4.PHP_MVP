<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login_user($info){
		$this->load->helper('security');
		$email = $info['email'];
		$password = do_hash($info['password']);
		$record = $this->get_record_by_email($email);
		if ($record['password'] == $password) {
			return $record;
		}
		else{
			die('pwd/name invalid');
		}

		// echo $email;
		// echo $password;
		// die();
	}

	public function get_record_by_email($email){
		$query = "SELECT * FROM users WHERE email=?";
		return $this->db->query($query, array($email))->row_array();
	}
}
