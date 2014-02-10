<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login/Registration</title>
	<link rel = "stylesheet" type = "text/css" href = "/assets/css/ngo_registration.css"> 
</head>

<body>

	<div id = "registrationdiv"> 
		<h3>Registration</h3> 
		<form id = "registration" action = "<?= base_url("main/ngoprocess_register") ?>" method = "post"> 
			<label>First Name:</label>
			<input id = "fname" type = "text" name = "first_name"><br /> 
			<label>Last Name:</label>
			<input id = "lname" type = "text" name = "last_name"><br />  
			<label>Email Address:</label>
			<input id = "regemail" type = "text" name = "email"><br />  
			<label>Password:</label>
			<input id = "regpw" type = "password" name = "password"><br />
			<label>Confirm Password:</label> 
			<input id = "confirmfield" type = "password" name = "confirm_password"> 
			<input type = "submit" value = "Register"> 
		</form> 
	</div>

	<div class = "errors"> 
		<?php 
			if ($errors)
			{
				echo $errors; 
			}	
		?>
	</div> 

<!-- 	<div class = "regerrors"> 
		<?php 
				if($regerrors)
			{
				echo $regerrors; 
			}
		?> 
	</div>  -->
</body> 
</html>