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

	public function displayDoctors(){
		$this->load->database();

		$query = $this->db->get('applications');
		$rs = $query->result_array();

		for($i=0; $i<sizeof($rs); ++$i) {
			$applicationno = $rs[$i]['Application_no'];
			$doctorno = $rs[$i]['Doctor_no'];
			$patientno = $rs[$i]['Patient_no'];
			$data['patientno'] = $patientno;
			$data['applicationno'] = $applicationno;
			$data['doctorno'] = $doctorno;

			$query1 = $this->db->get_where('doctors', array('Doctor_no' => $doctorno));
			$rs1 = $query1->result_array();
			$userno = $rs1[0]['User_no'];
			$data['userno'] = $userno;
			$data['email'] = $rs1[0]['Specialization'];
			$data['clinicname'] = $rs1[0]['Clinic_name'];
			$data['cliniclocation'] = $rs1[0]['Clinic_location'];

			$query2 = $this->db->get_where('users', array('User_no' => $userno));
			$rs2 = $query2->result_array();
			$data['username'] = $rs2[0]['Username'];
			$data['fullname'] = $rs2[0]['Full_name'];
			$data['email'] = $rs2[0]['Email_address'];
			$data['desc'] = $rs2[0]['Description'];
			$data['phone'] = $rs2[0]['Phone_number'];

			$finaltable[$i] = $data;
		}
		if ($finaltable!=null){
			return $finaltable;
		}
	}

	public function confirmbyPatient($applno, $doctorno, $patientno){
		$this->load->database();

		$query = $this->db->delete('applications', array('Application_no' => $applno));
		date_default_timezone_set('Africa/Nairobi');
		$date = date("Y/m/d");

		$data = array(
			'Doctor_no' => $doctorno,
			'Date_of_approval' => $date,
			'Patient_progress' => "Beginning"
		);

		$this->db->where('Application_no', $applno);
		$this->db->update('professional_help', $data);
	}
}

?>