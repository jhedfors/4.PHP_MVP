<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

  public function __construct(){
    parent::__construct();
    $this->load->model("Product");
  }

	public function index()
	{
    $products = $this->Product->show_all();
    $this->load->view('main_page',['products'=> $products]);
	}
  public function new(){
    $this->load->view('new_page');
  }
  public function create(){
    $product = $this->input->post();
    $this->Product->new($product);
    redirect('/');
  }
  public function update(){
    $product = $this->input->post();
    $this->Product->edit($product);
    redirect('/');
  }
  public function edit($id){
    $product = $this->Product->show_by_id($id);
    $this->load->view('edit_page',['product'=> $product]);
  }
  public function show($id){
    $product = $this->Product->show_by_id($id);
    $this->load->view('show_page',['product'=> $product]);
  }
  public function destroy($id){
    $product = $this->Product->delete($id);
    redirect('/');

  }
}
