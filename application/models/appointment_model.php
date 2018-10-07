<?php 

class Appointment_model extends CI_Model{
	public function applyforhelp($username, $condition){
		$this->load->database();

		//Getting user no
		$query = $this->db->get_where('users', array('Username'=> $username));
		$userarray = $query -> result_array();
		$userno = $userarray[0]['User_no'];

		//Getting patient number
		$query = $this->db->get_where('patients', array('User_no'=> $userno));
		$userarray = $query -> result_array();
		$patientno = $userarray[0]['Patient_no'];


		if ($this->db->insert('professional_help', array('Patient_no'=>$patientno, 'Condition_description'=>$condition))){
			return true;
		} else {
			return false;
		}
	}
}

?>