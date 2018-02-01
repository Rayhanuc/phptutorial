<?php

// Access Modifier
//public,private, protected

class Person {
	public $hat = "hat ace";
	protected $pa = "pa ace";

	public function display(){
		echo $this->pa;

	}
}

	class sub extends Person {
		//polimar
		public $eting = "manus khai";
		public $hat = "hat nai";

		public function show(){
			echo $this->pa. " sub class";
		}
	}

$person = new Person;
$person ->display();
echo "<br/>";
$sub = new sub;
$sub ->show();



?>