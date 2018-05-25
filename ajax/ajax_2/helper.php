<?php 
function login(){
	if(isset($_SESSION['login'])){
		return true;
	}
}
?>