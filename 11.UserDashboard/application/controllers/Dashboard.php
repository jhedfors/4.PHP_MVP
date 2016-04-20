<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('dashboard_view',['user_level' => 'normal']);
	}
	public function admin()
	{

		$this->load->view('dashboard_view',['user_level' => 'admin']);
	}
	public function edit_user($id)
	{
		$arr['id'] = $id;
		$this->load->view('edit_profile_view',$arr);
	}
	public function delete_user($id)
	{
		$arr['id'] = $id;
		$this->user_model->delete_user($id);


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
