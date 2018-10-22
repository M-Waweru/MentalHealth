<!DOCTYPE html>
<html>
<head>
	<title>Getting help</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/MentalHealth/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<style type="text/css">
	body{
		background-repeat: no-repeat;
		background-position: center; 
		background-size: cover;
		background-attachment: fixed;
		background-image: url('<?php echo base_url('css/img/autism-hands.jpg') ?>');
	}
</style>
</head>
<body>
	<br>
	<div class="container white z-depth-2" id="appform" style="padding: 20px;">
		<div class="row">
			<h2>Getting Professional Help</h2>
			<p>Please fill in the details below</p>
		</div>

		<div class="row">
			<form class="col s12" method="post" action="<?php echo base_url('index.php/appointment/submittodoctor') ?>">
				<div class="row">
					<div class="input-field col s10">
						<label for="condition">What seems to be troubling you?</label>
						<textarea name="condition" placeholder="Please give a short description here" class="materialize-textarea"></textarea>
					</div>
				</div>
				<p style="color: red;">
					<?php echo validation_errors(); ?>
				</p>			
				<div class="row">
					<button class="btn waves-effect waves-light" type="submit" name="action">Submit
						<i class="material-icons right">send</i>
					</button>
				</div>
			</form>
		</div>
	</div>

</body>
<script src="<?php echo base_url('js/jquery-3.1.1.min.js') ?> "></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.sidenav').sidenav();
		$(".dropdown-trigger").dropdown();
	});
</script>
<script type="text/javascript" src="<?php echo base_url('/js/materialize.min.js') ?>"></script>
</html>