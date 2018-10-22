<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Events extends CI_controller
{
	public function index(){
		$this->load->view('eventspage');
	}
}
?>