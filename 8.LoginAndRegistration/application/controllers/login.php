<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("User_model");
		$this->load->library('session');
	}
	public function index()
	{
		$this->load->view('loginreg_view');
	}
	public function welcome(){
		$info = $this->input->post();
		$errors = array();
		if (!filter_var($info['email'], FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Need valid email';
		}
		if (strlen($info['password']) <1){
			$errors[] = 'Need password';
		}
		if($errors != null){
			$this->session->set_userdata('errors_login',$errors);
			redirect('/');
			exit;
		}

		$record = $this->User_model->login_user($info);
		if($record){
			$this->load->view('welcome_view',['record'=> $record]);
		}
	}
	public function register(){
		$info = $this->input->post();
		if(!$this->validate_reg($info)){
			redirect('/');
			exit;
		}

		$this->load->helper('security');
		$info['password'] = do_hash($info['password']);
		$this->User_model->register($info);
		$record = $this->User_model->login_user($info);
		if($record){
			$this->load->view('welcome_view',['record'=> $record]);
		}
	}
	public function validate_reg($info){
		$errors= array();
		if (!$info['first_name']>0) {
			$errors[] = 'Need first name';
		}
		if (!$info['last_name']>0) {
			$errors[] = 'Need last name';
		}
		if (!filter_var($info['email'], FILTER_VALIDATE_EMAIL)) {
			$errors[] = 'Need valid email';
		}
		if (strlen($info['password']) <1){
			$errors[] = 'Need password';
		}
		if (!$info['password'] == $info['confirm_password']) {
			$errors[] = 'Passwords much match';
		}

		$record = $this->User_model->get_record_by_email($info['email']);
		if ($record) {
			$errors[] = 'Email already registered';
		}

		if($errors != null){
			$this->session->set_userdata('errors_reg',$errors);
			return false;
		}
		else{
			return true;
		}
	}

	public function logoff(){
		$this->session->unset_userdata('user_data');
		redirect('/');
	}

}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
