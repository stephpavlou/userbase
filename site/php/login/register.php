<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php 
			session_start();
			if(isset($_SESSION['register_error'])) {
				echo $_SESSION['register_error'];
				unset($_SESSION['register_error']);
			}
			session_destroy();
		?>
		<h1>Register new account</h1>
		<form action="register.handle.php" method="post">
			<label for="username">Username</label><br>
			<input type="text" id="username" name="username"><br>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password"><br>
			<label for="confirm_password">Confirm password</label><br>
			<input type="password" id="confirm_password" name="confirm_password"><br>
			<input type="submit" id="submit" name="submit" value="Register"><br>
		</form>
		<h2>Already have an account?<br>
		<a href="login.php">Login here.<a></h2>
	</body>
</html>