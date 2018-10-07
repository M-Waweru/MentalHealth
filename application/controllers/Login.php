<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function displayPage(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->view('login');
	}

	public function login_validate(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('usertype', 'UserType', 'required');
		$this->form_validation->set_rules('username', 'UserName', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login'); 
		} 
		else { 
			$usertype = $this->input->post('usertype');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('user_model');
			if ($this->user_model->login_auth($username, $usertype, $password)){
				$session_data = array(
					'username' => $username,
					'usertype' => $usertype
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'index.php/login/enter');
			} else {
				$this->session->set_flashdata('error', "Invalid Username and Password for ". $usertype ." User type");
				redirect(base_url('index.php/login/displayPage'));
			}
		}
	}

	function enter(){
		if ($this->session->userdata('username') != ''){
			redirect(base_url());
		} else {
			redirect(base_url('index.php/login/displayPage'));
		}
	}

	function logout(){
		$this->session->unset_userdata('username');
		redirect(base_url('index.php/login/displayPage'));
	}
}
?>