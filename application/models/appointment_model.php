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

	public function displayApplication(){
		$this->load->database();

		$this->db->select('*');
		$this->db->from('professional_help');
		$this->db->join('patients', 'patients.Patient_no = professional_help.Patient_no');
		$query = $this->db->get();

		$resulttable = $query->result_array();
		$rowcount = sizeof($resulttable);
		for ($i=0; $i < $rowcount; ++$i) { 
			$userno = $resulttable[$i]['User_no'];
			$patientno = $resulttable[$i]['Patient_no'];
			$applicationno = $resulttable[$i]['Application_no'];

			$userqry = $this->db->get_where('users', array('User_no' => $userno));
			$userrs = $userqry->result_array();

			$patientname = $userrs[0]['Username'];
			$patientfullname= $userrs[0]['Full_name'];

			$finaltable[$i] = array('Application No' => $applicationno, 'Patient No' => $patientno, 'Patient Name' => $patientname, 'Full Name' => $patientfullname, 'Condition' => $resulttable[$i]['Condition_description'], 'Residence' => $resulttable[$i]['Residence']);
		}
		return $finaltable;
	}

	public function getDoctorno($username){
		$this->load->database();

		$query = $this->db->get_where('users', array('Username' => $username));
		$rs = $query->result_array();

		$userno = $rs[0]['User_no'];

		$query = $this->db->get_where('doctors', array('User_no' => $userno));
		$rs = $query->result_array();
		$doctorno = $rs[0]['Doctor_no'];
		return $doctorno;
	}

	public function acceptApp($patientno, $doctorno, $appno){
		$this->load->database();

		if ($this->db->insert('applications', array('Application_no' => $appno, 'Patient_no' => $patientno, 'Doctor_no' => $doctorno))){
			return true;
		} else {
			return false;
		}
	}
}

?>