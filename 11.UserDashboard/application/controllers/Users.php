<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
		$this->load->library('session');
		$this->load->helper('security');

	}
	public function index()
	{
		$this->load->view('welcome_view');
	}
	public function show_signin_page(){

	$this->load->view('signin_view');
	}
	public function signin_user()
	{
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		$this->form_validation->set_rules("password", "Password", "trim|required");

		if(!$this->form_validation->run()){
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('signin_view');
		}
		$info = $this->input->post();
		$info['password'] = do_hash($info['password']);
		$record = $this->user_model->get_record_by_email($info['email']);
		if ($record['password'] == $info['password'] ) {
			$this->session->set_userdata('user_data',$record);
			redirect("users/show/".$record['id']."");
		}
		else{
			$this->session->set_userdata('errors_login',['Email/Password not valid']);
			redirect('/signin');
			exit;
		}


	}
	public function show_registration_page()
	{
		$this->load->view('register_view');
	}
	public function register_user()
	{
		$record = $this->user_model->register();
		redirect("users/show/".$record['id']."");

	}
  public function new()
  {
    $this->load->view('new_user_view');
  }
  public function edit()
  {
    $this->load->view('edit_profile_view');
  }
	public function show($id)
	{
		$profile = $this->user_model->get_profile($id);
		$this->load->view('show_user_view');

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
