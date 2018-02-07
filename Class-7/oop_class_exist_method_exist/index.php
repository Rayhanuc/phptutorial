<?php


// include 'class/Css.php';
// include 'class/Html.php';

spl_autoload_register(function($jekono) {
	include "class/".$jekono.".php";
});

if (class_exists("css")) {
	$obj= new Css();
	echo "<br>";
	if(method_exists($obj, "show")){
		$obj->show();
	}else {
		echo "method does not exist";
	}
	

}else{
		echo "class not found";
	}



echo "<br>";
$obj2= new Html();
echo "<br>";
$obj3= new Java();




?>