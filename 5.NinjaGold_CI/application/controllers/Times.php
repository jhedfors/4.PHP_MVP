<?php 


class Times extends CI_Controller {
    //displays the add course page
    public function index()
    {
        $myDate = date('l jS \of F, Y h:i:s A');
        $this->load->view('view_time', ['dateOnPage' => $myDate]);
    }
}
 ?>