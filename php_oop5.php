<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP&OOP</title>
</head>
<body>
	<?php

class Person {
	public $hat = "hat ace";
	public $pa = "pa ace";

	public function display(){

	}
}

	class sub extends Person {
		//polimor
		public $eting = "manus khai";
		public $hat = "hat nai";
	}
$result = new sub;

echo $result ->hat;


//Public/Private/Protected
echo "<h1 style='color:red;'>ceil,floor,round</h1>";

$number = 4.4;
echo "ceil = ".ceil($number);
echo "<br/>";
$number2 = 4.4;
echo "floor = ".floor($number2);
echo "<br/>";
$number3 = 4.6;
echo "round = ".round($number3);




	?>


</body>
</html>