<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function show_all()
	{
    $query = "SELECT * FROM products";
    return $this->db->query($query)->result_array();
	}

  public function show_by_id($id)
  {
    $query = "SELECT * FROM products WHERE id=?";
    return $this->db->query($query, [$id])->row_array();
  }
  public function new($info){
    $query = "INSERT INTO products (name, description, price, created_at, modified_at) VALUES (?, ?, ?,now(),now())";
    $values = array($info['name'],$info['description'],$info['price']);
    return $this->db->query($query,$values);
  }
  public function edit($info)
  {
    $query = "UPDATE products SET name=?, description=?, price=?, modified_at=NOW() WHERE id=?";
    $values = [$info['name'],$info['description'],$info['price'],$info['id']];
    $this->db->query($query,$values);
  }
  public function delete($id){
    $query = "DELETE FROM products WHERE id=?";
    $values = [$id];
   	$this->db->query($query,$values);
		// die();
  }
}
