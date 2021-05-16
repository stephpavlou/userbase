<!doctype html>
<html>
	<head>
        <link rel="stylesheet" type="text/css" href="css/home.css">
	</head>
	<body>
        <form action="../logout/logout.php" method="post">
			<input type="submit" id="logout" name="logout" value="Logout"><br>
		</form>
		<?php 
            include 'home.manage.php';
		?>
	</body>
</html>