<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_form');
	}

	public function process_form(){
		//our counter of times form is processed
		if($this->session->userdata('counter')){
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else{
			$this->session->set_userdata('counter',1);
		}

		$name = $this->input->post('name');
		$dojo_location = $this->input->post('dojo_location');
		$favorite_language = $this->input->post('favorite_language');
		$comments = $this->input->post('comments');

		//set variables
		$this->load->view('result', ["counter" => $counter,"name" => $name, "dojo_location" => $dojo_location, "favorite_language" => $favorite_language, "comments" => $comments]);

		// //load result
		// $this->load->view('result');

	}
	public function result(){
		redirect('result');
		// die('here');
	}


}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
