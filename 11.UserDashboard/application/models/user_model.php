<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('security');
	}
	public function add_user(){
		$info = $this->input->post();
		$info['user_level'] = 'normal';
		$info['description'] = '';
		$errors= array();
		$record = $this->get_record_by_email($info['email']);
		if ($record) {
			$this->session->set_userdata('errors_reg',['Email already registered']);
			redirect('/register');
			exit;
		}
		$this->load->helper('security');
		$info['password'] = do_hash($info['password']);
		$values = array('first_name' => $info['first_name'],
		'last_name' => $info['last_name'],
		'description' =>$info['description'],
		'email' =>$info['email'],
		'password' =>$info['password'],
		'user_level' =>$info['user_level'],
		'created_on' => date("Y-m-d, H:i:s"),
		'modified_on' => date("Y-m-d, H:i:s"));
		$this->db->insert('users', $values);
		return $this->get_record_by_email($info['email']);
	}

	public function show_all_users(){
		return $this->db->get('users')->result_array();
	}

	public function get_record_by_email($email){

		return $this->db->get_where('users', array('email' => $email))->row_array();

	}
	public function get_record_by_id($id){

		return $this->db->get_where('users', array('id' => $id))->row_array();

	}

	public function get_profile($id){
		$profile = $this->get_record_by_id($id);
		if($profile){
			$this->session->set_userdata('profile_data',$profile);
		}
		else {
			return false;
		}



	}
	public function delete_user($id){
		die($id);
	}



	//
	// $info = $this->input->post();
	// $info['password'] = do_hash($info['password']);
	// $record = $this->wall_model->login($info);
	// if(!$record){
	// 	$this->session->set_userdata('errors_login',['Email/Password not valid']);
	// 	redirect('/');
	// 	exit;
	// }
	// $this->get_messages_and_comments();
	//
	// $this->load->view('wall_view');

}
