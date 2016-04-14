<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Times extends CI_Controller {


	public function index()
	{
    $myDate = date("l jS \of F Y h:i:s A");

		$this->load->view('times',["dateOnPage"=> $myDate, "name" => "Mike",
    "myArray" => [1,2,3,4]
    ]);
	}

  public function new_method(){
    var_dump(['$mymethod' => "works"]);
    die();
  }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
