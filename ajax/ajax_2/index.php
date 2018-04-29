<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="box">
		<h2 class="heading">Create an Account</h2>
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
	<script src="assets/js/custom.js"></script>
</body>
</html>