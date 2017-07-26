<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body>
<div>The header content</div>
<div>
	<form method="post" name="loginForm" action="<?=base_url('st/login') ?>">
	<div class="form-item">
		<label>Username</label>
	<input type="text" name="username" id="username" required />
	</div>
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
</html>