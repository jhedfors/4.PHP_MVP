<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {
  //the __construct will automatically load the Course model
  public function __construct(){
    parent::__construct();
    $this->load->model("Course");
  }
  //when at the root directory the show()method is called
  public function index()
	{
    $this->show();
	}
  //the show method will call the ge_all_courses method from the Course model and load the courses_page view
  public function show(){
    $courses =$this->Course->get_all_courses();
    $this->load->view('courses_page',["courses" => $courses]);
  }
  //when the "Courses/add" method is called the post data is sent to the add_course model, and then returned to the same page using redirect
  public function add(){
    $course_details = $this->input->post();
    $this->Course->add_course($course_details);
    redirect('/');
  }
  //using the course ID,the course record information is retrieved from the display_course model, and passed to the destroy view page
  public function display($id){
    $course = $this->Course->display_course($id);
    $this->load->view('destroy',["course" => $course]);
  }
  //using the course ID, the delete_course model is called, then page redirected to root
  public function destroy($id){
    $this->Course->delete_course($id);
    redirect('/');
  }
}
