<!DOCTYPE html>
<html>
<head>
	<title>Insert an event</title>
	<!--Import Google Icon Font-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Import materialize.css-->
	<link type="text/css" rel="stylesheet" href="/MentalHealth/css/materialize.min.css"  media="screen,projection"/>
	<!--Let browser know website is optimized for mobile-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
	
	<div class="row">
		<div class="col s12 m4 offset-m4">
			<div class="card">
				<div class="card-action teal lighten-1 white-text">
					<h3>Register Event</h3>
				</div>
				<form action="<?php echo base_url('/index.php/events_control/insert_event') ?>" method="post">
					<div class="card-content" id="event_insertform">
						<div class="form-field">
							<label for="eventname">Event name</label>
							<input name="eventname" type="text" id="eventname">
							<p id="eventnamealert" style="visibility: hidden; color: red;">Event name cannot be blank</p>
						</div><br>
						<div class="form-field">
							<label for="eventdesc">Event Description</label>
							<input name="eventdesc" type="text" id="eventdesc">
							<p id="eventdescalert" style="visibility: hidden; color: red;">Event Description cannot be blank</p>
						</div><br>

                          </form>

						<div class="form-field">
							<button type="submit" name="submit"  class="btn-large waves-effect waves-dark" style="width: 100%;">Register</button>
							<?php 
							echo $this->session->flashdata("error");
							?>
						</div><br>
					</div>                    
				</form>
			</div>
		</body>
		</html>