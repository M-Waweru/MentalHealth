<?php
class Eventregistration extends CI_Model 
{
	function save ($username,$fullname,$phone)
	{
		$this->load->database();

		$data = array(
			'Full_name' => $fullname,
			'Phone_number' => $phone
		);

		$this->db->where('Username', $username);
		$this->db->update('users', $data);
		return true;
	}
}