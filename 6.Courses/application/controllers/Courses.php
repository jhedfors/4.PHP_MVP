<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

  public function index()
	{
    $this->show();
	}
  public function __construct(){
    parent::__construct();
    $this->load->model("Course");
  }
  public function show(){
    $courses =$this->Course->get_all_courses();
    $this->load->view('courses_page',["courses" => $courses]);
  }
  public function add(){
    $course_details = $this->input->post();
    $this->Course->add_course($course_details);
    redirect('/');
  }
  public function display($id){
    $course = $this->Course->display_course($id);
    $this->load->view('destroy',["course" => $course]);
  }
  public function destroy($id){
    $this->Course->delete_course($id);
    redirect('/');
  }
}
