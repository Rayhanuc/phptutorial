<?php


class ClassName
{
	public $name;

	public function display()
	{
	echo "I am a Student";
	}

	public function __get($onno){
		echo "My name is ".$onno;
	}

	public function __set($a,$b){
		echo "undefined $a->$b";
	}

	public function __call($a,$b){
		echo " method ".$a." value ".implode(' ', $b);
	}

}


$obj = new ClassName();
$obj->display();
echo "</br>";
echo $obj->Raihan;
echo "</br>";
$obj->age=25;
echo "</br>";
$obj->arekta(" 1, 2, 3, 4 ");

?>