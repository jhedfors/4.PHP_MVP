<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {


  public function index()
	{
    // $this->output->enable_profiler(TRUE);

    $this->show();
	}
  public function show(){
    $this->load->model("Course");

    $courses =$this->Course->get_all_courses();
    $this->load->view('courses_page',["courses" => $courses]);
  }
  public function add(){
    $this->load->model("Course");
    $course_details = $this->input->post();
    $this->Course->add_course($course_details);
    redirect('/');

  }
}
