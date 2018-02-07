<?php

//oop-magic-method
/**
* 
*/
class ClassName
{
	
	public $name;

	public function show()
	{
		echo "I am a student";
	}

	public function __get($arakta){
		echo "My Name is ".$arakta;
	}

	public function __set($a,$b){
		echo "undefined $a->$b";
	}

	public function __call($a,$b) {
		echo "method ".$a." value ".implode(' ',$b); 
	}
}

$obj = new ClassName();
$obj->show();
echo "<br>";
$obj->Raihan;
echo "<br>";
$obj->age=25;
echo "<br>";
$obj->arekta("1 2 3 4");



?>