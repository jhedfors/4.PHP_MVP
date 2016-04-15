<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();



class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_form');
	}

	public function process_form(){
		//our counter of times form is processed

		// reset counter
		//  $this->session->set_userdata('counter',1);

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
	}
	public function result(){
		redirect('/');

	}
	public function logout() {
	        $this->session->sess_destroy();
	        redirect('main');
	    }


}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
