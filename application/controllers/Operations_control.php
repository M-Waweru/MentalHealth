<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Operations_control extends CI_Controller {
	public function notifications() {
		$this->load->model('appointment_model');
		$data['data'] = $this->appointment_model->displayApplication();
		$this->load->view('navbar');
		$this->load->view('doctorpage', $data);
	}
}
?>