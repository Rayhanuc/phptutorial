<?php


/**
* css class
*/
class Css
{

public $name = "raihan islam";
public $age = "25";

private $username = "raihan";

protected $pass = "one";

public function display(){
	echo "inner class"."</br>";
	foreach ($this as $key => $value) {
			echo $key . "=".$value."</br>";
		}	
}

}


?>