<?php 
	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksi, "SELECT * FROM customer WHERE username='$username' AND password='$password'");

	if(mysqli_num_rows($query) == 0){
		header("location: ".BASE_URL. "index.php?page=login&notif=true");
	} else {
		$row = mysqli_fetch_assoc($query);
		
		session_start();

		$_SESSION['id_customer'] = $row['id_customer'];
		$_SESSION['username'] = $row['username'];
		
		header("location: ".BASE_URL."index.php?page=my_profile&module=pesanan&action=list");

	}
?>