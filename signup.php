<?php
	require "header.php";	
?>

	<main>
		
		<?php
			if (isset($_GET['error'])) {
				if ($_GET['error'] == "emptyfields") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong>Fill in all fields!</strong></p>';
				}
				else if ($_GET["error"] == "invalidmailuid") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong>Invalid username and e-mail!</strong></p>';
				}
				else if ($_GET["error"] == "invaliduid") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong>Invalid username!</strong></p>';
				}
				else if ($_GET["error"] == "invalidmail") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong>Invalid e-mail!</strong></p>';
				}
				else if ($_GET["error"] == "passwordcheck") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; "><strong>Your password do not match!</strong></p>';
				}
				else if ($_GET["error"] == "userormailtaken") {
					echo '<p style="color: #f00; text-align: center; padding-top:100px; " ><strong> Either Username or E-mail is already taken!</strong></p>';
				}
			}
			else if(isset($_GET['sign-up'])) {
				if ($_GET['sign-up'] == "success") {
					echo '<p style="color: #f00; text-align: center;  padding-top:100px;"><strong> Signup is successful!</strong></p>';
				}				
			}		
		?>
		<form action="includes/signup.inc.php" method="post" class="signupbox">
			<h1>Create your account</h1>
			<p>Username</p>
			<input type="text" name="uid" placeholder="">
			<p>E-mail</p>
			<input type="text" name="mail" placeholder="">
			<p>Password</p>
			<input type="password" name="pwd" placeholder="">
			<p>Repeat password</p>
			<input type="password" name="pwd-repeat" placeholder="">
			<button type="submit" name="signup-submit">Signup</button>
		</form>
	</main>

<?php
	require "footer.php";
?>