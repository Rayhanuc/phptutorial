<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP&OOP</title>
</head>
<body>

	
	<?php

	echo "<h1 style='color:red;'>PHP</h1>";
	// isset();
	// empty(var);

	$x = "kisu akta";
	$result = isset($x);
	var_dump($result);

	echo "<br/>";
	$x = "";
	$result1 = empty($x);
	var_dump($result);

	//strtoupper,strtolower function
	echo "<br/>";
	$a = "kisu akta";
	$result = strtoupper($a);
	var_dump($result);


	echo "<br/>";
	$b = "KISU akta";
	$result = strtolower($b);
	var_dump($result);

	//ucfirst,ucword
	echo "<br/>";
	$c = "amara akane";
	$result = ucfirst($c);
	var_dump($result);

	echo "<br/>";
	$d = "amara akane kisu akta liklam";
	$result = ucwords($d);
	var_dump($result);



	echo "<h1 style='color:red;'>OOP</h1>";

	//inheritance	//Preventing from Extending & Overriding
	



	
	class Person {
	public $hat = "2 ta hat ace";
	public static $kan = "2 ta kan ace";
	public static $singproperty = "manush gan gaite pare";
	const FULLNAME = "md raihan islam";
	const LASTNAME = "echa";

	public function __construct() {
		echo $this->hat;
		echo "<br/>";
		echo Person::FULLNAME;
	}

	public static function sing() {
		echo self::$kan;
	}
	public function khayadaya() {
		echo "manush khaite pare";
	}
	public function __destruct(){
		echo "<h1>Hi</h1>";
	}
}

	class sub extends Person {

	public $hat = "2 ta hat nai";

	public function khayadaya() {
		echo "ata poriborton korlam";
	}

	}



	echo "<br/>";
	Person::sing();
	echo "<br/>";
	echo Person::$singproperty;
	echo "<br/>";
	$sub = new sub();
	echo "<br/>";
	echo $sub ->hat;
	echo "<br/>";
	echo $sub ->khayadaya();


	//Preventing from Extending & Overriding









	?>




</body>
</html>