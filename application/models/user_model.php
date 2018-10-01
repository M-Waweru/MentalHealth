<?php 

class User_model extends CI_Model {
	public function login_auth($username, $usertype, $password){
		$this->load->database();

		$query = $this->db->get_where('users', array('Username'=>$username, 'User_type'=>$usertype, 'Password'=>$password));

		if ($query->num_rows() > 0){
			return true;
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
				'Password' => $password 
			);

			$query = $this->db->get_where('users', array('Username'=> $username));
			$userarray = $query -> result_array();

			$userno = $userarray[0]['User_no'];

			$this->db->insert($usertype, array('User_no'=>$userno));
			return true;
		}
	}

	public function test(){
		$query = $this->db->get_where('users', array('Username'=>"Mathenge"));
		$userarray = $query -> result_array();
		print_r($userarray);
		$userno = $userarray[0]['User_no'];
		print_r($userno);
		$usertype = "patients";

		if ($usertype == "patients"){
			$this->db->insert('patients', array('User_no'=>$userno));
		} 
	}
}
?>