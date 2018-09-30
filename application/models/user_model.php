<?php 
	
	class User_model extends CI_Model
	{
		$this->load->database();
		public function login_auth($username, $usertype, $password){
			$this->db->where('Username', $username);
			$this->db->where('User type', $usertype);
			$this->db->where('Password', $password);

			$query = $this->db->get('users');

			if ($query->num_rows() > 0){
				return true;
			} else {
				return false;
			}
		}
	}
?>