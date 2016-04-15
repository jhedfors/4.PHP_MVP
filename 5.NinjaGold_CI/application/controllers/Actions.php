<?php 
session_start();



class Actions extends CI_Controller
{
	public $scores;
	public $actiontexts;
	
	public function index()
	{
		
		$this->session->set_userdata('scores', 0);
		$this->session->set_userdata('actiontexts', "");
		$scores = $this->session->userdata('scores');
		$actiontexts = $this->session->userdata('actiontexts');
		$this->load->view('ninjagold', ['score' => $scores, 'actions' => $actiontexts]);
	}

	public function Farm(){
		$dates = date("l jS \of F Y h:i:s: A");
		$randNum = rand(10,20);
		$scores = $this->session->userdata('scores');
		$this->session->set_userdata('scores', $scores += $randNum);
		$actiontexts = $this->session->userdata('actiontexts');
		$this->session->set_userdata('actiontexts', $actiontexts .= "You visited a Farm and got ".$randNum." gold. ".$dates."<br>");
		$this->load->view('ninjagold', ['score' => $scores, 'actions' => $actiontexts]);
	}
	public function Cave(){
		$dates = date("l jS \of F Y h:i:s: A");
		$randNum = rand(5,10);
		$scores = $this->session->userdata('scores');
		$this->session->set_userdata('scores', $scores += $randNum);
		$actiontexts = $this->session->userdata('actiontexts');
		$this->session->set_userdata('actiontexts', $actiontexts .= "You visited a Cave and got ".$randNum." gold. ".$dates."<br>");
		$this->load->view('ninjagold', ['score' => $scores, 'actions' => $actiontexts]);
	}
	public function House(){
		$dates = date("l jS \of F Y h:i:s: A");
		$randNum = rand(2,5);
		$scores = $this->session->userdata('scores');
		$this->session->set_userdata('scores', $scores += $randNum);
		$actiontexts = $this->session->userdata('actiontexts');
		$this->session->set_userdata('actiontexts', $actiontexts .= "You stayed at home and saved ".$randNum." gold. ".$dates."<br>");
		$this->load->view('ninjagold', ['score' => $scores, 'actions' => $actiontexts]);
	}
	public function Casino(){
		$dates = date("l jS \of F Y h:i:s: A");
		$chance = rand(1,10);
		$randNum = rand(0,50);
			$scores = $this->session->userdata('scores');
			$actiontexts = $this->session->userdata('actiontexts');
		if($chance < 8){
			$this->session->set_userdata('scores', $scores -= $randNum);
			$this->session->set_userdata('actiontexts', $actiontexts .= "You LOST your shirt and ".$randNum." gold at the casino. ".$dates."<br>");
		}
		else {
			// $scores = $this->session->userdata('scores');
			$this->session->set_userdata('scores', $scores += $randNum);
			// $actiontexts = $this->session->userdata('actiontexts');
			$this->session->set_userdata('actiontexts', $actiontexts .= "You WON ".$randNum." gold at the Casino - Quit while you are ahead. ".$dates."<br>");
		}
		$this->load->view('ninjagold', ['score' => $scores, 'actions' => $actiontexts]);
	}		
	public function Reset(){
		$this->session->sess_destroy();
		redirect('/');
	}

};










 ?>