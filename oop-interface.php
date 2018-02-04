<?php
//oop interface

interface student {
	public function display();
}

interface arekta {
	public function arekta();
}

class Output implements student, arekta {

	public function display(){
		echo "I am a student";
	}
	public function arekta(){
		echo "arekta";
	}
}



$result = new Output();
$result -> display();
echo "<br/>";
$result -> arekta();
echo "<br/>";









?>