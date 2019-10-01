<?php 
	session_start();

	unset($_SESSION['id_customer']);
	unset($_SESSION['username']);

	header("location: index.php");

?>