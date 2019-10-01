<?php
    include("../../function/koneksi.php");   
    include("../../function/helper.php");   
     
    $id_customer = $_GET['id_customer'];
	
    $username = $_POST['username'];
	$email = $_POST["email"];
	$nama_lengkap = $_POST["nama_lengkap"];
	$alamat = $_POST["alamat"];
	$level = $_POST["level"];

	mysqli_query($koneksi, "UPDATE customer SET username='$username',
											   email='$email',
											   nama_lengkap='$nama_lengkap',
											   alamat='$alamat',
											   level='$level'
											   WHERE id_customer='$id_customer'");

    header("location: ".BASE_URL."index.php?page=my_profile&module=customer&action=list");
?>