<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Operations_control extends CI_Controller {
	public function notifications() {
		if ($this->session->userdata('usertype')=="doctors") {
			$this->load->model('appointment_model');
			$data['data'] = $this->appointment_model->displayApplication();
			$this->load->view('navbar');
			$this->load->view('doctorpage', $data);
		}
	}
}
?>