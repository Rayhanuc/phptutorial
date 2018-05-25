<?php

session_start();
include('helper.php');
// if(!login()){
// 	header('location:login.php');
// }


?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cheatroom</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

	<div class="chat box">
		<div class="squarebox">
			
		</div>

		<form action="" method="POST" class="sendmessage form-area">
			<input  placeholder="type something" class="amader-input message" type="text" name="message">

			<input type="submit" value="Send" name="send">
		</form>


		Don't have an account? <a href="register.php" class="registration">Please log in</a>
	</div>




	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/script.js"></script>
</body>
</html>