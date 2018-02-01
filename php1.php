<?php
echo "<h2>php start</h2>";
echo date('y-F-d g:h:s');
echo "<br/>";
echo date('l');
echo "<br/>";
echo date('l',mktime(0,0,0,10,02,1983));
echo "<br/>";


//oop start
echo "<h2>oop start</h2>";
echo "<br/>";
class Person {
	//property
	public $hat = "2 ta hat ace";
	public $kan = "2 ta kan ace";

	//method
	public function sing() {
		echo "manush gan gaite pare";
	}
	public function kawadawa(){
		echo "manush kaite pare";
	}

}

//instant sheet
$result = new Person;
$result -> sing();
echo "<br/>";
$result -> kawadawa();
echo "<br/>";
echo $result->hat;
echo "<br/>";
echo $result->kan;

?>
