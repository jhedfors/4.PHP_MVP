<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	public function get_all_courses()
	{
    return $this->db->query("SELECT * FROM courses")->result_array();
	}

  function add_course($course)
  {
      $query = "INSERT INTO Courses (name, description, created_at) VALUES (?,?,?)";
      $values = array($course['name'], $course['description'], date("Y-m-d, H:i:s"));
      return $this->db->query($query, $values);
  }
}
