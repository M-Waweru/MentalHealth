<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Events_control extends CI_Controller
{
	public function index(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->view('signup');
	}

	
}

?>