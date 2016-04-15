<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random_word extends CI_Controller {

	public function index(){
		$length = 14;
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

		if ($this->session->userdata('counter')) {
			$counter = $this->session->userdata('counter') ;
			$this->session->set_userdata('counter',$counter+1);
		}
		else{
			$this->session->set_userdata('counter',1);
		}

		$this->load->view('main_page',['random' => $randomString, 'counter' => $counter]);
	}
}
