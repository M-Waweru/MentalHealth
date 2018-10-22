<!DOCTYPE html>
<html>
<head>
	<title>Accepted application</title>
</head>
<body>
	<!-- Modal -->
	<div id="successmodal" class="modal">
		<div class="modal-content">
			<h4>Successful accepted application</h4>
			<p>You have successfully accepted an application which will be sent to the user who will confirm. They will have access to your profile to help them make a decision.</p>
		</div>
		<div class="modal-footer">
			<a href="<?php echo base_url(); ?>" class="modal-close waves-effect waves-green btn-flat">Okay</a>
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