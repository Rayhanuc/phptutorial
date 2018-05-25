
<?php

session_start();

include('config.php');
include('helper.php');
if(login()) {
	header('location:chat.php');
}


if(isset($_POST['login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$query = $connection->query("SELECT * FROM user WHERE email = '$email'");

	$fetch = mysqli_fetch_assoc($query);

	$pass = $fetch['password'];
	$firstname = $fetch['firstname'];
	$lastname = $fetch['lastname'];

	if($pass == $password){

		$SESSION['login'] = 'successfull';
		$SESSION['firstname'] = $firstname;
		$SESSION['lastname'] = $lastname;
		$SESSION['email'] = $email;

		header('location: chat.php');
	}

	die();
}

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="box">
		<h2 class="heading shadow2">Log in</h2>
		<form action="" method="POST" class="userlogin form-area">
			<input class="amader-input" type="email" placeholder="Email Address" name="email">
			<input class="amader-input" type="password" placeholder="Password" name="password">

			<input type="submit" value="Login" name="login">
		</form>


		Don't have an account? <a href="register.php" class="registration">Please log in</a>
	</div>




	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>