<?php  
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function displayPage(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		$this->load->view('login');
		echo "log1";
	}

	public function login_validate(){
		$this->load->helper(array('form'));
		$this->load->library('form_validation');
		echo "log1";
		$this->form_validation->set_rules('usertype', 'UserType', 'required');
		$this->form_validation->set_rules('username', 'UserName', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		echo "log1";
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login'); 
		} 
		else { 
			$usertype = $this->input->post('usertype');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			//model function
			$this->load->model('user_model');
			echo "log2";
			if ($this->user_model->login_auth($username, $usertype, $password)){
				$session_data = array(
					'username' => $username
				);
				$this->session->set_userdata($session_data);
				redirect(base_url() . 'login/enter');
			} else {
				$this->session->set_flashdata('error', "Invalid Username and Password for ". $usertype ." User type");
				redirect(base_url('login/displayPage'));
			}
		}
	}

	function enter(){
		if ($this->session->userdata('username') != ''){
			echo '<h2>Welcome '.$this->session->userdata('username').'</h2>'; 
			echo '<a href="'.base_url('login/logout').'">Logout</a>';

		} else {
			redirect(base_url('login/displayPage'));
		}
	}

	function logout(){
		$this->session->unset_userdate('username');
		redirect(base_url('login/displayPage'));
	}
}
?>