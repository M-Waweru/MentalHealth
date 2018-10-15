<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Operations_control extends CI_Controller {
	public function notifications() {
		$this->load->view('navbar');
		$this->load->view('doctorpage');
	}
}
?>