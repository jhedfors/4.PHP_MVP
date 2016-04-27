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
	public function books_view(){
		$data['reviews'] =
		$this->Reviews_model->show_for_all_books();
		$data['books'] = $this->Books_model->show_all_books();
		$this->load->view('books_view',['data'=> $data]);
	}
	public function book_view($book_id){
		$reviews = $this->Reviews_model->show_by_book_id($book_id);
		$this->load->view('book_view',['reviews'=> $reviews]);
	}
	public function add_book_view(){
		$authors = $this->Books_model->show_all_authors();
		$this->load->view('add_book_view',['authors'=>$authors]);
	}
	public function add_book(){
		$this->form_validation->set_rules("title", "Title", "trim|required|is_unique[books.title]");
		$this->form_validation->set_rules("author", "Author", "trim|callback_check_author_exists");
		$this->form_validation->set_rules("new_author", "New Author", "trim|is_unique[authors.name]");
		$this->form_validation->set_rules("review", "Review", "trim|required");
		$this->form_validation->set_rules("star_rating", "Star Rating", "trim|required");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors',[validation_errors()]);
			redirect('books/add');
		}
		else {
			$active_id = $this->session->userdata('active_id');
			$post = $this->input->post();
			$book =[];
			if ($post['new_author']!=null) {
				$author_id = $this->Books_model->add_author($post['new_author']);
				$post['author_id'] = $author_id;
			}

				$book = [$post['title'],$post['author_id']];
				$book_id =
				$this->Books_model->add_book($book);
				$review = ['book_id' => $book_id, 'user_id'=> $active_id,'review'=>$post['review'],'star_rating'=>$post['star_rating']];

				$this->Reviews_model->add($review);
				redirect('books');
			}
	}
	public function check_author_exists($str){

		$new_author = $this->input->post('new_author');
		$selected_author = $this->input->post('author_id');

		if ($selected_author == NULL && $new_author == NULL) {
			$this->form_validation->set_message('check_author_exists', 'Select or enter Author name');
			return FALSE;
		}

	}

	public function add_review(){
		$post = $this->input->post();
		$info = [$post['book_id'],$post['user_id'],$post['review'],$post['star_rating']];
		$this->Reviews_model->add($info);
		redirect('/books/'.$post['book_id'].'');
	}
	public function delete_review($review_id,$book_id,$author_id){
		$this->Reviews_model->delete($review_id);
		$other_reviews = $this->Reviews_model->show_by_book_id($book_id);
		if ($other_reviews[0]['review_id']!=null) {
			redirect('/books/'.$book_id.'');
		}
		else{
			$this->Books_model->delete($book_id);
			$other_books = $this->Books_model->show_all_books_by_author($author_id);

			if($other_books!=null) {
				redirect('/books');
				exit;
			}
			else {
				$this->Books_model->delete_author($author_id);
				redirect('/books');
			}
		}
	}
	public function user_view($user){
		$active_id = $this->session->userdata('active_id');
		$user_info =
		$this->Reviews_model->show_by_user_id($user);
		$this->load->view('user_view',['user_info'=>$user_info]);
	}

	public function register_form(){
		$this->form_validation->set_rules("name", "Name", "trim|required|min_length[3]");
		$this->form_validation->set_rules("alias", "Alias", "trim|required|min_length[3]");
		$this->form_validation->set_rules("email", "Alias", "trim|required|min_length[3]|valid_email|callback_check_preexisting_email");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("confirm_pw", "Confirmed Password", "trim|required|matches[password]");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_reg',[validation_errors()]);
			$this->load->view('login_reg_view');
		}
		else{
			$post = $this->input->post();
			$reg_info =[$post['name'],$post['alias'],$post['email'],do_hash($post['password'])];
			$this->Users_model->register($reg_info);
			$this->login_form($post);
			redirect('travels');

		}
	}
	public function check_preexisting_email($post_email){
		$record = $this->Users_model->show_user_by_email($post_email);
		if($record){
			$this->form_validation->set_message('check_preexisting_email', '%s is already in use');
			return FALSE;
		}
		else {
			return TRUE;
		}
	}
	public function login_form(){
		$post = $this->input->post();
		$this->form_validation->set_rules("email", "Email", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required|callback_check_valid_password");
		if($this->form_validation->run() === FALSE)		{
			$this->session->set_userdata('errors_login',[validation_errors()]);
			$this->load->view('login_reg_view');
		}
		else{
			$record = $this->Users_model->show_user_by_email($post['email']);

			$this->session->set_userdata('active_id' ,$record['id']);
			$this->session->set_userdata('alias' ,$record['alias']);
			redirect('books');
		}
	}
	public function callback_check_valid_password($password){
		$email = $this->input->post('email');
		$record = $this->Users_model->show_user_by_email($email);
		if (do_hash($password) != $record['password']) {
			$this->form_validation->set_message('check_valid_password', '%s or Email not valid');
			return FALSE;
		}

	}

	public function logout(){
		$this->session->sess_destroy();
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
