<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');

	}
	public function index()
	{
		$this->load->view('welcome_view');
	}
	public function signin_user()
	{
		$this->user_model->signin();
		$this->load->view('signin_view');


		// $this->load->model('user_model');
	}
	public function register_user()
	{
		$this->load->view('register_view');
	}
  public function new()
  {
    $this->load->view('new_user_view');
  }
  public function edit()
  {
    $this->load->view('edit_profile_view');
  }
  public function show()
  {
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