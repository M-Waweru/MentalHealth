<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/MentalHealth/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	<ul id="accountcontent" class="dropdown-content">
		<li><a href='#!'>Account Settings</a></li>			
	</ul>
	<nav class="blue">
		<div class="nav-wrapper">
			<a href="<?php echo base_url() ?>" class="brand-logo">Hey Friend</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php
				if ($this->session->userdata('username')!=''){
					echo "<li><a class='dropdown-trigger' data-target='accountcontent' href='#'>".$this->session->userdata('username')."</a><i class='material-icons right'>arrow_drop_down</i></li>";	
					if ($this->session->userdata('usertype')=="patients"){
						echo "<li><a href=".site_url('appointment/').">Get Professional Help</a></li>";
						echo "<li><a href=".site_url('account/notifications').">Progress</a></li>";
					} else {
						echo "<li><a href=".site_url('account/notifications').">Check on Patients</a></li>";
					}
					echo "<li><a href=".site_url('/login/logout').">Logout</a></li>";
				} else {
					echo "<li><a href=" . site_url('signup/') . ">Sign Up</a></li>";
					echo "<li><a href=''>About</a></li>";
					echo "<li><a href=" . site_url('/login/displayPage') . ">Login</a></li>";
				}
				?>
			</ul>
		</div>
	</nav>
	<ul class="sidenav" id="mobile-demo">
		<?php
		if ($this->session->userdata('username')!=''){
			echo "<li><a href='#'><i class='material-icons right'>arrow_drop_down</i>".$this->session->userdata('username')."</a></li>";
			if ($this->session->userdata('usertype')=="patients"){
				echo "<li><a href=".site_url('appointment/').">Get Professional Help</a></li>";
				echo "<li><a href=".site_url('account/notifications').">Progress</a></li>";
			} else {
				echo "<li><a href=".site_url('account/notifications').">Check on Patients</a></li>";
			}
			echo "<li><a href=".site_url('/login/logout').">Logout</a></li>";
		} else {
			echo "<li><a href=" . site_url('signup/') . ">Sign Up</a></li>";
			echo "<li><a href=''>About</a></li>";
			echo "<li><a href=" . site_url('/login/displayPage') . ">Login</a></li>";
		}
		?>
	</ul>
</body>
<script src="<?php echo base_url('js/jquery-3.1.1.min.js') ?> "></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('select').formSelect();
		$('.sidenav').sidenav();
		$(".dropdown-trigger").dropdown();
	});
</script>
<script type="text/javascript" src="<?php echo base_url('/js/materialize.min.js') ?>"></script>
</html>