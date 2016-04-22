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

		$email = "jeff@hedfors.net";
		$id = 1;
		$author = "Douglas Adams";
		$info = ['Kazu Hedfors', 'Kazu','kazu@hedfors.net','12345678'];
		$book = ["Dirk Gently's Holistic Detective Agency",4];
		$review = ['2','1','great book!','5'];
		$book_id = 1;
		// var_dump($this->Book_review_model->show_all_users());
		// var_dump($this->Book_review_model->show_user_by_email($email));
		// var_dump($this->Book_review_model->show_user_by_id($id));
		// var_dump($this->Book_review_model->add_author($author));
		// var_dump($this->Book_review_model->show_all_authors());
		//  var_dump($this->Book_review_model->add_user($info));
		//  var_dump($this->Book_review_model->add_book($book));
	//  var_dump($this->Book_review_model->show_all_books());
 // 	var_dump($this->Book_review_model->add_review($review));
	// var_dump($this->Book_review_model->show_all_reviews());
		// var_dump($this->Book_review_model->show_all_books_and_reviews());
		// var_dump($this->Book_review_model->show_all_reviews_for_book($book_id));
		// var_dump($this->Book_review_model->show_all_reviews_by_user($id));
		// die();

		$this->load->view('login_reg_view');
	}
	public function register_form(){
		
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
