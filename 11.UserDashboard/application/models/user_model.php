<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('security');
	}
	public function index(){

	}

	public function signin(){

	}
	public function register(){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Confirmed Password", "trim|required|matches[password]");
		if($this->form_validation->run() === FALSE){
			$this->session->set_userdata('errors_reg',[validation_errors()]);

			redirect('/register');
			exit;
		}
		$this->add_user();
	}
	public function add_user(){
		$info = $this->input->post();
		$errors= array();
		$record = $this->get_record_by_email($info['email']);
		if ($record) {
			$this->session->set_userdata('errors_reg',['Email already registered']);
			redirect('/register');
			exit;
		}
		$this->load->helper('security');
		$info['password'] = do_hash($info['password']);
		$this->register($info);
		$record = $this->login_user($info);
		$this->load->view('welcome_view',['record'=> $record]);


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
