<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <?php 
			session_start();
			if(isset($_SESSION['username'])) {
				header("Location: php/home/home.php");
				exit();
			}
			session_destroy();
		?>
        <h1>Just A Simple Userbase</h1>
        <h2>Register an account or login using the buttons below!</h2>
        <a href="php/login/register.php">Register</a><br>
        <a href="php/login/login.php">Login</a>
    </body>
</html>
