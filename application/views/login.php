<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body>
<div>The header content</div>
<div>
<div id="notification"></div>
	<form method="post" name="loginForm" action="<?=base_url('st/login') ?>">
	<div class="form-item">
		<label>Username</label>
	<input type="text" name="username" id="username" required />
	</div>
	<input type="hidden" id="basedir" value="<?=base_url()  ?>">
	<div class="form-item">
		<label>Password</label>
		<input type="password" name="password" id="password">
	</div>
	<div>
		<input type="submit" class="" name="btn" value="Login" />
	</div>
		
	</form>
</div>
</body>
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
</html>