<?php

/**
* Database
*/
class Database {

public $host   = DB_HOST;
public $user   = DB_USER;
public $pass   = DB_PASS;
public $dbname = DB_NAME;


public $link;
public $error;

//magic mathod applyed
public function __construct(){
$this->connectDB();
}


public function connectDB(){

$this->link = new mysqli($this->host,$this->user,$this->pass,$this->dbname);
if(!$this->link){
	$this->error = "Connection Faild";

	return false;
 }
}


public function insert($query){
	$insert = $this->link->query($query) or die($this->link->error.__Line__);
	if ($insert){
		return $insert;
	}else {
		return false;
	}
}

}


?>