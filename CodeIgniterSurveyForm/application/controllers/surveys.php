<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

session_start();

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey_form');
	}

	public function process_form(){
		//our counter of times form is processed
		if($this->session->userdata('counter')){;
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else{
			$this->session->set_userdata('counter',1);
		}


		if($this->session->userdata('name')){;
			$name = $this->session->userdata('name');
		}
		// var_dump($_SESSION);

		//trying to set as a variable to call on other page
		$this->load->view('result', ["counter" => $counter]);

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
