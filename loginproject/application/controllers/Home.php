<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{   
		$this->load->helper('url');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}



public function getstudent(){

$query = $this->db->get('studdata');

return $result = $query->result();

}




}