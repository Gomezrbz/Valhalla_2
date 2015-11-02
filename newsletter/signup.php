<?php 
include_once 'scripts/signup-script.php'

 ?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<title> Sign Up </title>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	
</head>
<body>
	<div id="mainWrapper">
			<div id="signup-form">
				<h2><span> Sign Up</span></h2>
				<p> Subscribe for more information about our products.</p>
			<form method="post" action="signup.php" >
				<table>
					<tr>
						<td><label for="Name">Name</label></td>
						<td><input type="name" name="name" id="name" /></td>
					</tr>
					
					<tr>
						<td><label for="Email">Email</label></td>
						<td><input type="email" name="email" id="email" /></td>
					</tr>

					<tr>
						<td></td>
						<td><input type="submit" name="submit" value="Sumbit" /></td>
					</tr>
				</table>
			</form>
			</div>
	</div>
</body>
</html>
