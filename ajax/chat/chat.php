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
	
<a class="logout" href="logout.php">Log out</a>
	<div class="chat box">
		<div class="squarebox">

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