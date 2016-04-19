<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Course extends CI_Model {
  //the get_all_courses method queries the database, then returns the resorted results using the array_multisort built-in function which requires that a temporary array with the sorting key be created.
	public function get_all_courses()
	{
    // $courses = $this->db->query("SELECT * FROM courses")->result_array();
		//Changed to ORM below
		$courses = $this->db->get('courses')->result_array();

    foreach ($courses as $key => $row) {
      $sortingkey[$key] = $row['created_at'];
    }
    array_multisort($sortingkey, SORT_DESC, $courses);
    return $courses;
	}
  //an insert query with the course information is submitted to the database
  function add_course($course)
  {
    // $query = "INSERT INTO Courses (name, description, created_at, modified_at) VALUES (?,?,?,?)";
    // $values = array($course['name'], $course['description'], date("Y-m-d, H:i:s"),date("Y-m-d, H:i:s"));
    // return $this->db->query($query, $values);
		//Changed to ORM below
    $values = array('name' => $course['name'], 'description' =>$course['description'], 'created_at' => date("Y-m-d, H:i:s"),'modified_at' =>date("Y-m-d, H:i:s"));

		$this->db->insert('courses', $values);

  }
  // this function queries and returns the information for the specific course id
  function display_course($id){
    // $query = "SELECT * FROM courses WHERE id=?";
    // return $this->db->query($query, array($id))->row_array();
		//Changed to ORM below
		return  $this->db->get_where('courses', array('id' => $id))->row_array();;
  }
  //using the course ID, a query is submitted to the database to delete the record
  function delete_course($id){
    // $query = "DELETE FROM courses WHERE id=?";
    // return $this->db->query($query, array($id));
		//Changed to ORM below
		$this->db->delete('courses', array('id' => $id));

  }
}
