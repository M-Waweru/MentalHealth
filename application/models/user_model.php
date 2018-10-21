<?php 

class User_model extends CI_Model {
	public function login_auth($username, $usertype, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Username'=>$username, 'User_type'=>$usertype));
		$userarray = $query -> result_array();
		
		if ($query->num_rows() > 0){
			if (password_verify($password, $userarray[0]['Password'])){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}

	public function admin_auth($adminname, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Username'=>$adminname, 'User_type'=>"admins"));
		$userarray = $query -> result_array();

		if ($query->num_rows() > 0){
			if (password_verify($password, $userarray[0]['Password'])){
				return true;
			} else {
				return false;
			}
		} else {
			return false;
		}	
	}

	public function signup_auth($username, $usertype, $email, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Username'=>$username));

		if ($query->num_rows() > 0){
			return false;
		} else {
			$data = array(
				'Username' => $username,
				'User_type' => $usertype,
				'Email_address' => $email,
				'Password' => password_hash($password, PASSWORD_DEFAULT) 
			);

			$this->db->insert('users', $data);

			$query = $this->db->get_where('users', array('Username'=> $username));
			$userarray = $query -> result_array();
			print_r($userarray);

			$userno = $userarray[0]['User_no'];

			$this->db->insert($usertype, array('User_no'=>$userno));
			return true;
		}
	}
}
?>