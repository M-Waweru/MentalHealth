<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller{

	public function index(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->view('navbar');
		$this->load->view('getting_help');
	}

	public function submittodoctor(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('condition', 'Condition', 'required');
		if ($this->form_validation->run() == FALSE) {
			index(); 
		} 
		else {
			$condition = $this->input->post('condition');
			$username = $this->session->userdata('username');

			$this->load->model('appointment_model');

			if ($this->appointment_model->applyforhelp($username, $condition)){
				$this->load->view('navbar');
				$this->load->view('successmodal');
			} else {
				$this->session->set_flashdata('error', "Could not apply");
				index();
			}
		}
	}

	public function acceptbyDoctor($patientno, $username, $applicationno){
		
	}
}
?>