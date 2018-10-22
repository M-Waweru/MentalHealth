<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller1 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('blog');
		
		
$this->load->helper('url');

		
	}

	public function displayUpload(){
		$this->load->view('upload');
	
	}	
	
}
