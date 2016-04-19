<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Wall extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model("wall_model");
		$this->load->library('session');
		$this->load->helper('security');

	}
	public function index()
	{

		$this->load->view('login_reg_view');
	}
	public function login(){


		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		// MH TEST OF
		var_dump ($this->form_validation->run());
		die( ' MIKE TEST OF VALIDATIONS ');
		// END TEST
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('login_reg_view');
			exit;
		}
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('login_reg_view');
			exit;
		}
		$info = $this->input->post();
		$info['password'] = do_hash($info['password']);
		$record = $this->User_model->login_user($info);
		if(!$record){
			$this->session->set_userdata('errors_login',['Email/Password not valid']);
			redirect('/');
			exit;
		}
		$this->wall_model->get_posts_and_comments();
		$this->load->view('wall_view',['record'=> $record]);

	}
	public function register(){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Confirmed Password", "trim|required|matches[password]");
		if($this->form_validation->run() === FALSE){
			$this->session->set_userdata('errors_reg',[validation_errors()]);
			$this->load->view('login_reg_view');
			exit;
		}
		$info = $this->input->post();
		$record = $this->wall_model->retrieve_record($info['email']);
		if ($record) {
			$this->session->set_userdata('errors_reg',['Email already registered']);
			redirect('/');
			exit;
		}
		$info['password'] = do_hash($info['password']);
		$this->wall_model->register($info);
		$record = $this->wall_model->login($info);
		$this->session->set_userdata('current_user',$info['id']);
		$this->load->view('wall_view',['record'=> $record]);
		exit;
	}

	public function get_messages_and_comments(){
		$messages = $this->wall_model->get_messages();
		$comments = $this->wall_model->get_comments();
		$this->session->set_userdata('messages',$messages);
		$this->session->set_userdata('comments',$comments);
	}

	public function add_message(){
		$info = $this->input->post();
		$current_user = $this->session->userdata('current_user');
		$this->wall_model->add_message($info['post_message'],$current_user);
	}
	public function add_comment(){
		$info = $this->input->post();
		$current_user = $this->session->userdata('current_user');
		$this->wall_model->add_message($info['post_message'],$current_user);
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
