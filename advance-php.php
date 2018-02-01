<?php

$name = array('ami', 'tumi', 'amra');
$result = implode('',$name);
var_dump($name);

echo "<br/>";
$name2 = "Raihan islam";
$result = explode(' ', $name2);
var_dump($result);

//implode
echo "<br/>";
$name3 = array('ami','tumi','amra');
$result= implode(' ', $name3);
var_dump($result);

//trim
echo "<br/>";
$name4 = "raihan";
$result = trim($name4,'n');
var_dump($result);






?>