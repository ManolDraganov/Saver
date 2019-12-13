<?php
	require "header.php";
	if (isset($_SESSION['userUid'])) { 
				echo '<p class="welcome" align="center">Здравейте ', $_SESSION['userUid'], '!</p>';}	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center" class="contact-header"><b >Изпитвате затруднения?</b></h1>
	<br>
	<h3 align="center" class="contact-subheader">Чувствайте се свободни да се свържете с мен по всяко време! :)</h3>
	<br>

	<table>
  		<tr>
    		<th>Име</th>
    		<th>Телефон</th>
    		<th>E-mail</th>
  		</tr>
  		<tr>
    		<td>Манол Драганов</td>
    		<td>+359 88 5790202</td>
    		<td>manol_draganov@abv.bg</td>
  		</tr>
  
	</table>
</body>
</html>
<?php
	require "footer.php";
?>