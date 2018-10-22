<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
</head>
<body>
	<!-- Modal -->
	<div id="successmodal" class="modal">
		<div class="modal-content">
			<h4>Successful confirmation</h4>
			<p>You have confirmed that the following doctor will have access to your details and can get to know you better.</p>
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