<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("User_model");
		$this->load->library('session');
	}
	public function index(){
			$this->load->view('loginreg_view');
	}
	public function login_form(){
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('loginreg_view');
		}
		else{
			$this->welcome();
		}
	}

	public function registration_form(){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Confirmed Password", "trim|required|matches[password]");
		if($this->form_validation->run() === FALSE){
			$this->session->set_userdata('errors_reg',[validation_errors()]);
			$this->load->view('loginreg_view');
		}
		else{
			$this->register();
		}
	}
	public function welcome(){
		$info = $this->input->post();
		$errors = array();
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
		$errors= array();
		$record = $this->User_model->get_record_by_email($info['email']);
		if ($record) {
			$this->session->set_userdata('errors_reg',['Email already registered']);
			redirect('/');
			exit;
			// $errors[] = 'Email already registered';
		}
		$this->load->helper('security');
		$info['password'] = do_hash($info['password']);
		$this->User_model->register($info);
		$record = $this->User_model->login_user($info);
		// if($record){
			$this->load->view('welcome_view',['record'=> $record]);
		// }
		// if($errors != null){
			// $this->session->set_userdata('errors_reg',$errors);
			// redirect('/');
			// exit;
		// }
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
