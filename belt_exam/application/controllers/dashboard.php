<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent:: __construct();
		$this->load->model('Dashboard_model');
	}
	public function index()
	{
		$this->load->view('login_reg_view');
	}
	public function register(){
		$this->form_validation->set_rules("name", "Name", "trim|required|min_length[1]");
		$this->form_validation->set_rules("username", "Username", "trim|required|min_length[1]");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[3]");
		$this->form_validation->set_rules("confirm_pw", "Confirmed Password", "trim|required|matches[password]");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_reg',[validation_errors()]);
			$this->load->view('login_reg_view');
		}
		else{
			$post = $this->input->post();
			if($this->Dashboard_model->register($post) && $this->Dashboard_model->login($post)){
				redirect('travels');
			}
			redirect('unanticipated_error');
		}
	}
	public function login(){
		$this->form_validation->set_rules("username", "User Name", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('login_reg_view');
		}
		else{
			$post = $this->input->post();
			if($this->Dashboard_model->login($post)){
				redirect('travels');
			}
			redirect('unanticipated_error');
		}
	}
	public function travels_page(){
		$active_id = $this->session->userdata('active_id');
		$trips = $this->Dashboard_model->get_all_trips($active_id);
		$this->load->view('travels_view',['trips'=> $trips]);
	}
	public function destination_page($id){

		$this->load->view('destination_view',['dest_id'=> $id]);
	}
	public function join_trip($id){
		$this->Dashboard_model->join_trip($id);
		redirect('travels');
	}
	public function add_destination_page(){
		$this->load->view('add_destination_view');
	}
	public function logout(){
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
