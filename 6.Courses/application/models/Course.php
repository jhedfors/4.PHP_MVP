<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {

	public function get_all_courses()
	{
    $courses = $this->db->query("SELECT * FROM courses")->result_array();

    foreach ($courses as $key => $row) {
      $sortingkey[$key] = $row['created_at'];
    }
    array_multisort($sortingkey, SORT_DESC, $courses);
    return $courses;
	}

  function add_course($course)
  {
    $query = "INSERT INTO Courses (name, description, created_at, modified_at) VALUES (?,?,?,?)";
    $values = array($course['name'], $course['description'], date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
    return $this->db->query($query, $values);
  }
  function display_course($id){
    $query = "SELECT * FROM courses WHERE id=?";
    return $this->db->query($query, array($id))->row_array();
  }
  function delete_course($id){
    $query = "DELETE FROM courses WHERE id=?";
    return $this->db->query($query, array($id));
  }
}
