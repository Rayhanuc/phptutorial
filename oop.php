<?php
// property,method
	
	// property
	// public $hat = "2 ta hat ace";
	// public $kan = "2 ta kan ace";

	// method:
	// public function sing() {
	// 		echo "manush gan gaita para";
	// 	}


class Person {
	public $hat = "2 ta hat ace";
	public $kan = "2 ta kan ace";
	public $singproperty = "manush gan gaite pare";

	public function sing() {
		echo $this->singproperty;
	}
	public function khayadaya() {
		echo "manush khaite pare";
	}
}

class person2 {
	public $singproperty = "2manush gan gaite pare";
	public function sing() {
		echo $this->singproperty;
	}
}

$result = new Person;
$result -> sing();
echo "<br/>";
$result -> khayadaya();
echo "<br/>";
echo $result -> hat;
echo "<br/>";
echo $result -> sing();

echo "<br/>";
$result2 = new person2;
echo "<br/>";
$result2 -> sing();

// instent sheet:
// new person;

//constructor/destructor
class person3{
	public $dkj ="2 ta chok asa";
	public static $huiu = "amar onek kisu asa";
	public static $oweuriuproperty = "<h2>manush maramari kortha para</h2>";

	const FULLNAME = "md raihan islam";

	//magic mathod
	public function __construct(){
		echo $this-> dkj;
		echo "<br/>";
		echo person3::FULLNAME;
	}

	public static function play() {
		echo "output";		
	}
	public static function gole(){
		echo self::$huiu;
	}
	public function kothabola() {
		echo "manush kotha boltha para";
	}



	public function __destruct() {
		echo "<h1 style='color:green;'>Hi</h1>";
	}

}


echo "<br/>";
//$result = new person3;
echo "<br/>";
//$result -> play();

person3:: play();
echo "<br/>";
echo person3:: $oweuriuproperty;

person3:: gole();

// constant



?>
