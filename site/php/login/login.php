<!doctype html>
<html>
	<head>
	</head>
	<body>
		<?php 
			session_start();
			if(isset($_SESSION['login_error'])) {
				echo $_SESSION['login_error'];
				unset($_SESSION['login_error']);
			}
			if(isset($_SESSION['username'])) {
				header("Location: ../home/home.php");
				exit();
			}
			session_destroy();
		?>
		<h1>Login</h1>
		<form action="login.handle.php" method="post">
			<label for="username">Username</label><br>
			<input type="text" id="username" name="username"><br>
			<label for="password">Password</label><br>
			<input type="password" id="password" name="password"><br>
			<input type="submit" id="submit" name="submit" value="Login"><br>
		</form>
		<h2>Don't have an account?<br>
		<a href="register.php">Register here.<a></h2>
	</body>
</html>