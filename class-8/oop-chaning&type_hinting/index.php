<?php

// include 'class/Css.php';
// include 'class/Html.php';

spl_autoload_register(function($jekono){
	include "class/".$jekono.".php";
});

if(class_exists("Css")){
	$obj=new Css();
	echo "</br>";
	$arrayName = array(
		array('10','20', '30'),
		array('10','20', '30')
	);
	$obj->display($arrayName)->display2();
	echo "</br>";
	// $obj->display2();
	echo "</br>";
	
}else {
	echo "class not found";
}

echo "</br>";
$obj2=new Html();
echo "</br>";
$obj3=new Java();

?>