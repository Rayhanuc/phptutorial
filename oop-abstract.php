<?php
//oop abstract

abstract class student {
	public $name = "Rayhan Uddin Chowdhury";
	public function name(){
		echo $this->name;
	}
abstract public function age();
}


class sub extends student {
	public function display(){
		parent::name();
	}
	public function age(){
		echo "age is 3g now";
	}
}




$output = new sub();

echo $output -> display();
echo "<br>";
echo $output -> age();



?>




