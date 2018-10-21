<!DOCTYPE html>
<html>
<head>
	<title>Your application was successful</title>
</head>
<body>
	<!-- Modal -->
	<div id="successmodal" class="modal">
		<div class="modal-content">
			<h4>Successful application</h4>
			<p>Your application has been sent to the relevant therapists in your area of preference</p>
		</div>
		<div class="modal-footer">
			<a href="<?php echo base_url(); ?>" class="modal-close waves-effect waves-green btn-flat">Agree</a>
		</div>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		$('.modal').modal();
		$('.modal').modal('open');
	});
</script>
</html>