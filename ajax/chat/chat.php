<?php 


	session_start();


	require_once('functions.php');

	if(!logged_in()){
		header('location: index.php');
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Chatroom</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	
<a href="logout.php">Log out</a>


<?php

if(isset($_POST['chatupdate'])){
		
	$email = $_SESSION['email'];
	$message = $_POST['message'];

	$query = $connection->query("INSERT INTO conversation (email, message) VALUES('$email', '$message')");

	

	die();
}

?>

	<div class="chat box">
		<div class="squarebox">

			<p class="fullname">Rayhan uddin : Hi</p>

		</div>
		
		<form action="" method="POST" class="sendmessage">
			<input placeholder="type something" class="amader-input message" type="text" name="message">
			<input type="submit" value="Send" name="send">
		</form>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/scripts.js"></script>


</body>
</html>