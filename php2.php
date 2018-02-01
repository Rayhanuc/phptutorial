<?php


echo "<h2 style='color:red;'>PHP</h2>";

$name="Raihan islam";

$result = explode(' ',$name);
var_dump($result);
echo "<br/>";



$name2 = array('ami','tumi','amra');

$result = implode(' ',$name2);
var_dump($result);
echo "<br/>";


$name3 = "raihan";
$result = trim($name3,"an");
var_dump($result);


echo "<h2 style='color:blue;'>oop</h2>";

echo "<br/>";
class Person2 {
	//property
	public $hat = "2 ta hat ace";
	public $kan = "2 ta kan ace";
	public $singproperty = "manush gomaita pare";

	//method
	public function sing() {
		echo $this->singproperty;
	}
	public function kawadawa(){
		echo "manush kaite pare";
	}

}

$result = new Person2;
echo $result -> sing();
echo "<br/>";



class Person3 {
	//property
	public $kan = "2 ta hat ace";
	public $pa = "2 ta kan ace";
	public $playproperty = "manush gomaita pare";

	//method
	public function play() {
		echo $this->playproperty;
	}
	public function jamakapod(){
		echo "manush kaite pare";
	}

}

class Person4 {
	public $playproperty = "manush2 gomaita pare";
	public function play() {
		echo $this->playproperty;
	}
}
$result = new Person3;

echo $result -> play();
echo "<br/>";

echo "<br/>";
$result2 = new Person4;
$result2->play();




?>

