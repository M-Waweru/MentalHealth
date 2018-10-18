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
		<li><a href="#!">Account Settings</a></li>
		<li><a href="#!">Notifications</a></li>
		<li class="divider"></li>
		<li><a href="#!">three</a></li>
	</ul>
	<nav>
		<div class="nav-wrapper">
			<a href="<?php echo base_url() ?>" class="brand-logo">Hey Friend</a>
			<a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<?php 
				if ($this->session->userdata('username')!=''){
					echo "<li><a class='dropdown-trigger' data-target='accountcontent' href='#'>".$this->session->userdata('username')."</a></li>";
					echo "<li><a href=".site_url('/login/logout').">Logout</a></li>";
				} else {
					echo "<li><a href=" . site_url('signup_control/') . ">Sign Up</a></li>";
					echo "<li><a href=''>About</a></li>";
					echo "<li><a href=" . site_url('/login/displayPage') . ">Login</a></li>";

				}
				?>
			</ul>
		</div>
	</nav>
	<ul class="sidenav" id="mobile-demo">
		<li><a href="sass.html">Sass</a></li>
		<li><a href="badges.html">Components</a></li>
		<li><a href="collapsible.html">Javascript</a></li>
		<li><a href="mobile.html">Mobile</a></li>
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