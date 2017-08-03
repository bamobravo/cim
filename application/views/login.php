<?php include 'includes/header.php' ?>
<div id="notification"></div>
<div class="content no-float">
	<form method="post" name="loginForm"  action="<?=base_url('st/login') ?>" class="login-form">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" id="username" required />
	</div>
	<input type="hidden" id="basedir" value="<?=base_url()  ?>">
	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" id="password">
	</div>
	
	<div>
		<input type="submit" class="btn btn-success" name="btn" value="Login" />
	</div>
	</form>
</div>
<?php include 'includes/footer.php' ?>
<script type="text/javascript" src='<?=base_url() ?>js/jquery.min.js' ></script>
<script type="text/javascript">
	$(document).ready(function($) {
		$('form').submit(function(event) {
			$('#notification').val();
			event.preventDefault();
			var data = $(this).serialize();
			data+='&btn=submit';
			$.post($('#basedir').val()+'st/login', data, function(val, textStatus, xhr) {
				val = jQuery.parseJSON(val);
				if (val.status) {
					location.assign(val.message);
				}else{
					$('#notification').text(val.message);
				}
			});
		});
	});
</script>
