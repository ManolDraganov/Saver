<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Saver</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<nav class="topnav">		
			<a href="index.php" class="header-logo"><img src="img/logo.png" alt="logo" width="2.5%" height="2.5%"></a>
			<a href="index.php" class="active-page button "><i class="fa fa-home"></i> Home</a>
			<a href="aboutme.php" class="button"><i class="fa fa-id-card">About me</i></a>
			<a href="contact.php" class="button"><i class="fa fa-phone"></i> Contact</a>
	
			<div>
				<?php
					if (isset($_SESSION['userId'])) {
						echo '<form action="includes/logout.inc.php" method="post">
							<button class="button-out" type="submit" name="logout-submit">Logout</button>
							</form>';											
					}
					else {
						echo '<form action="includes/login.inc.php" method="post">
									<input type="text" name="mailuid" placeholder="Username">
									<input type="password" name="pwd" placeholder="Password">
									<button  type="submit" name="login-submit" id="button-in">Login</button>
									<a href="signup.php" id="signup">Signup</a>
								</form>';
							 	
					}

				?>								
			</div>
	</nav>
