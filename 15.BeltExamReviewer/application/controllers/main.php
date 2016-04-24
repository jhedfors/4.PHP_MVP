<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('Books_model');
		$this->load->model('Users_model');
		$this->load->model('Reviews_model');
		$this->load->library('session');
		$this->load->helper('security');
	}
	public function index()
	{
		$this->load->view('login_reg_view');
	}
	public function books_page(){
		$this->load->view('books_view');
	}
	public function individual_books_page($book_id){
		$this->load->view('individual_book_view');
	}
	public function books_add_page(){
		$this->load->view('add_book_view');
	}
	public function individual_users_page($users_id){

	}




	public function register_form(){

	}
	public function login_form(){

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
