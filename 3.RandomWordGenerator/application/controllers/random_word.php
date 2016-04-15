<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random_word extends CI_Controller {
	public function index()
	{
		$this->load->view('main_page');
	}
	public function randomize(){
		$length = 14;
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }

		// $this->load->view('main_page',['random' => $randomString]);
		$this->load->view('main_page');

		// $this->load->view('main_page',['randomString'=> $randomString]);
	}
}
