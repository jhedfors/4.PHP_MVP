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
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[3]");
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
	public function register_user(){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[3]");
		$this->form_validation->set_rules("confirm_password", "Confirmed Password", "trim|required|matches[password]");
		if(!$this->form_validation->run()){
			$this->session->set_userdata('errors_reg',[validation_errors()]);
			redirect('/register');
			exit;
		}
		$record = $this->user_model->add_user();
		$this->session->set_userdata('user_data',$record);
		redirect("users/show/".$record['id']."");

	}
  public function new()
  {

    $this->load->view('new_view');
  }
	public function edit_information(){
		$this->form_validation->set_rules("first_name", "First Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("last_name", "Last Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("email", "Email", "trim|required|min_length[1]");
		if(!$this->form_validation->run()){
			$this->session->set_userdata('errors',[validation_errors()]);
			redirect('users/edit');
		}
		else {
			$post_info = $this->input->post();
			$id = $this->session->userdata('profile_data')['id'];
			$this->user_model->edit_info($post_info,$id);
			redirect('users/edit');
		}
	}
	public function edit_password(){
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[3]");
		$this->form_validation->set_rules("confirm_password", "Confirmed Password", "trim|required|matches[password]");
		if(!$this->form_validation->run()){
			$this->session->set_userdata('errors',[validation_errors()]);
			$this->load->view('edit_profile_view');
		}
		else {
			$post_info = $this->input->post();
			$post_info = ['password' => do_hash($post_info['password'])];
			$id = $this->session->userdata('profile_data')['id'];
			$this->user_model->edit_password($post_info,$id);
			redirect('users/edit');
		}
	}

	public function edit_description(){

		$post_info = $this->input->post();
		$post_info = ['description' => $post_info['description']];
		$id = $this->session->userdata('profile_data')['id'];
		$this->user_model->edit_description($post_info,$id);
		$signed_in_id = $this->session->userdata('user_data')['id'];
		if ($signed_in_id == $id) {
			redirect('users/edit');
		}
		else {
			redirect("users/edit/".$id."");
		}



	}

  public function edit()
  {
		$signed_in_user_id = $this->session->userdata('user_data')['id'];
		$session_user_data = $this->user_model->get_record_by_id($signed_in_user_id);
		$this->session->set_userdata('user_data',$session_user_data);
		$this->session->set_userdata('profile_data',$session_user_data);
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
