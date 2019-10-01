<?php
	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$username = $_POST['username'];
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$alamat = $_POST['alamat'];
	$password = $_POST['password'];
	$re_password = $_POST['re_password'];

	unset($_POST['password']);
	unset($_POST['re_password']);
	$dataForm = http_build_query($_POST);

	$query_email = mysqli_query($koneksi, "SELECT * FROM customer WHERE email='$email'");
	$query_username = mysqli_query($koneksi, "SELECT * FROM customer WHERE username='$username'");
	
	if(empty($username) || empty($nama_lengkap) || empty($email) || empty($alamat) || empty($password)){
		header("location: ".BASE_URL."index.php?page=register&notif=require&$dataForm");
	}elseif($password != $re_password){
		header("location: ".BASE_URL."index.php?page=register&notif=password&$dataForm");
	}elseif (mysqli_num_rows($query_email) == 1) {
		header("location: ".BASE_URL."index.php?page=register&notif=email&$dataForm");
	}elseif (mysqli_num_rows($query_username) == 1) {
		header("location: ".BASE_URL."index.php?page=register&notif=username&$dataForm");
	} 	
	else{
		$password = md5($password);
		mysqli_query($koneksi, "INSERT customer (username, password, nama_lengkap, email, alamat)
								VALUES ('$username', '$password', '$nama_lengkap', '$email', '$alamat')");
		header("location: ".BASE_URL."index.php?page=login");
	}

?>	