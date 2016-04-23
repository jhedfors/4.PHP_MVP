<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard_model extends CI_Model {
	public function __construct(){
	}
	public function show_all_users(){
		$query = "SELECT * FROM users";
		return $this->db->query($query)->result_array();
	}
	public function login($post){
		$record = $this->show_by_username($post['username']);
		$first_name = '';
		$name = $record['name'];
		for ($i=0; $i < strlen($name); $i++) {
			if ($name[$i] == ' ') {
				break;
			}
			else {
				$first_name.=$name[$i];
			}
		}
		if($record['password'] == $post['password']){
			$this->session->set_userdata('active_id' ,$record['id']);
			$this->session->set_userdata('first_name' ,$first_name);
			return true;
		}
		else{
			return false;
		}
	}
	public function register($post){
			$record = $this->show_by_username($post['username']);
		 if($record){
			 die('username already exists');
			}
			$query = "insert into users (name, username, password,created_at, modified_at) values(?,?,?,NOW(),NOW())";
			$values = ["{$post['name']}","{$post['username']}","{$post['password']}"];
			$this->db->query($query, $values);
			return true;
	}
	public function show_by_username($username){
		$query = "SELECT * FROM users WHERE username = '$username'";
		return $this->db->query($query)->row_array();
	}
	public function add($info){
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, modified_at)  VALUES (?,?,?,?,NOW(),NOW())";
		return $this->db->query($query,$info);
	}
	public function get_all_trips($id){
		$query = "SELECT users.id as user_id, users.name, destination, destinations.id as dest_id, user_planner_id,
			start_date, end_date, 	description FROM destinations LEFT JOIN schedules ON destinations.id = schedules.destination_id LEFT JOIN users ON users.id = schedules.user_id OR users.id = destinations.user_planner_id
			ORDER BY destinations.id, CASE WHEN users.id = $id THEN 1 ELSE 2 END, users.id;";
			$data = $this->db->query($query)->result_array();
			$nodupe = [];
			$current_dest_id = '';
			for ($i=0; $i < count($data); $i++) {
				if ($data[$i]['dest_id']!=$current_dest_id) {
					$nodupe[] = $data[$i];
					$current_dest_id = $data[$i]['dest_id'];
				}
			}
			$data = $nodupe;
			return $data;
			// $this->session->set_userdata('all_trips',$data);
	}
	public function get_all_trips_for_user($id){
		$query = "SELECT users.id as user_id, users.name, destination, destinations.id as dest_id,
			start_date, end_date, 	description FROM destinations LEFT JOIN schedules ON destinations.id = schedules.destination_id LEFT JOIN users ON users.id = schedules.user_id OR users.id = destinations.user_planner_id";
			$data = $this->db->query($query)->result_array();
			$this->session->set_userdata('all_trips',$data);
		}
	public function join_trip($id){
		$active_id = $this->session->userdata('active_id');
		$query = "INSERT INTO schedules
			( user_id, destination_id ) VALUES ($active_id, $id)";
		$this->db->query($query);


	}
}
