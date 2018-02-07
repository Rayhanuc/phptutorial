<?php


// include 'class/Css.php';
// include 'class/Html.php';

spl_autoload_register(function($jekono) {
	include "class/".$jekono.".php";
});




$obj= new Css();
echo "<br>";
$obj2= new Html();
echo "<br>";
$obj3= new Java();




?>