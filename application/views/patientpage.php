<!DOCTYPE html>
<html>
<head>
	<title>Patient page</title>
</head>
<body>
	<div class="container col s12">
		<h4>List of Doctor Approvals</h4>
		<p>Below shows the doctors that have accepted your applications for help</p>
	</div>
	<div class="container col s6">

		<?php 
		if ($data!=null){
			foreach ($data as $key => $value){
				if ($data[$key]['patientno'] == $this->session->userdata('typeno')){
					echo "  <div class='row'>
					<div class='col s12 m6'>
					<div class='card blue-grey darken-1'>
					<div class='card-content white-text'>
					<span class='card-title'>Doctor Name: ".$data[$key]['username']."</span>
					<p>Clinic Name: ".$data[$key]['clinicname']."</p>
					<p>Clinic Location: ".$data[$key]['cliniclocation']."</p>
					<p>Email address: ".$data[$key]['email']."</p>
					<p>Phone number: ".$data[$key]['phone']."</p>
					<p>Description: ".$data[$key]['desc']."</p>
					</div>
					<div class='card-action'>
					<a href='".base_url('index.php/appointment/confirmbyPatient?applno='.$data[$key]['applicationno'].',&doctorno='.$data[$key]['doctorno'].',&patientno='.$data[$key]['patientno'])."'>Accept</a>
					<a href='#'>Cancel</a>
					</div>
					</div>
					</div>
					</div>
					";	
				}
			}
		}
		?>
	</div>
</body>
</body>
</html>