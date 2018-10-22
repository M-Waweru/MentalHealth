<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Con2 extends CI_Controller {

	
	public function index()
	{
		$this->load->view('upload');
		
		
$this->load->helper('url');

		
	}

	public function displayUpload(){
		$this->load->view('upload');
	
	}	
	
}
