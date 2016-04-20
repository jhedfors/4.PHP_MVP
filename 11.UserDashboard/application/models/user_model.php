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
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");

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
