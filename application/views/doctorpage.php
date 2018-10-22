<?php 
if ($this->session->userdata('usertype')!='doctors'){
	redirect(base_url('index.php/login/displayPage'));
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Doctor's page</title>
</head>
<body>
	<div class="container col s12">
		<h4>Patient Applications</h4>
		<p>Below shows the website users that have applied for professional help</p>
	</div>
	<div class="container col s6">

		<?php 
		$i = 0;
		foreach ($data as $key => $value){
			echo "  <div class='row'>
			<div class='col s12 m6'>
			<div class='card blue-grey darken-1'>
			<div class='card-content white-text'>
			<span class='card-title'>User Name: ".$data[$key]['Patient Name']."</span>
			<p>Condition: ".$data[$key]['Condition']."</p>
			<p>Residence: ".$data[$key]['Residence']."</p>
			</div>
			<div class='card-action'>
			<a href='".base_url('index.php/appointment/acceptbyDoctor?patientno='.$data[$key]['Patient No'].'&username='.$this->session->userdata['username'].'&applno='.$data[$key]['Application No'])."'>Accept</a>
			<a href='#'>Cancel</a>
			</div>
			</div>
			</div>
			</div>
			";			
		}
		?>
	</div>
</body>
</html>