

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css?v=<?= filemtime('style.css')?>">
	<script type="text/javascript"  defer src="java.js?v=<?=filemtime('java.js') ?>"></script>
	<title>test</title>

</head>
<body >

<div id="body">
<div id="img" class="img" style="background-size:cover;">
</div>
</div>

 <div class="login-page">
 </div>
 	
 	<div class="login-form" id="login_form">
 		<h2>Sign in to your account</h2>
 		<form>
 			<p class="menu-item">Email</p>
 			<input  type="name" name="username" placeholder="Your Email">
 			<p class="menu-item">Password</p>
 			<input type="password" name="password" placeholder="Your Password">
 		<a  class="forgot_pass"href="/forgotpass">Forgot password?</a>
 		<input type="submit" name="submit" value="Signin">
 		<p class="menu-item create_account">Don't have an account<a href="/register"> Click Here</a></p>
 		</form>

 	</div>

</body>
</html>