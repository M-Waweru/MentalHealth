<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
{
	public function index(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->view('signup');
	}

	public function signup_validate(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');

		$this->form_validation->set_rules('usertype', 'UserType', 'required');
		$this->form_validation->set_rules('username', 'UserName', 'required');
		$this->form_validation->set_rules('email', 'Email address', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('signup_control'); 
		} else {
			$usertype = $this->input->post('usertype');
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$this->load->model('user_model');

			if ($this->user_model->signup_auth($username, $usertype, $email, $password)){

				redirect(base_url() . 'index.php/login/displayPage');
			} else {
				$this->session->set_flashdata('error', "Username has already been taken");
				redirect(base_url('index.php/signup_control/displayPage'));
			}
		}
	}

	public function test(){
		$this->load->model('user_model');
		$this->user_model->test();
	}
}
?>