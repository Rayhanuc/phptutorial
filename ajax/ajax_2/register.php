<?php

include('config.php');
if(isset($_POST['register'])) {
	$firstname = $_POST['first_name'];
	$lastname = $_POST['last_name'];
	$email = $_POST['email'];
	$password = $_POST['password'];

	$emailss = $connection->query("SELECT * FROM user WHERE email = '$email'");

	//second time try to input email of data
	if(mysqli_num_rows($emailss) >= 1){
		echo "email already exists";
	}else {
		//fist time input email
		$query = $connection->query("INSERT INTO user (firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password')");

		if($query) {
			echo "<h4 style='color: #7bf97b;font-size: 25px;'>You have been registered successfully</h4>";
		}
	}

	die();



}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>



	<div class="box">
		<h2 class="heading shadow2">Create an Account</h2>
		<form action="" method="POST" class="userregistration form-area">
			<input class="amader-input" type="text" placeholder="First Name" name="first_name">
			<input class="amader-input" type="text" placeholder="Last Name" name="last_name">
			<input class="amader-input" type="email" placeholder="Email Address" name="email">
			<input class="amader-input" type="password" placeholder="Password" name="password">

			<input type="submit" value="Register" name="registration">
		</form>

		<p class="success"></p>

		Already Have an account? <a href="login.php" class="login">Please log in</a>
	</div>




	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>