<?php 

	include_once("../../function/koneksi.php");
	include_once("../../function/helper.php");

	$nama = $_POST['nama'];
	$button = $_POST['button'];

	if($button == "Tambah"){
		mysqli_query($koneksi, "INSERT INTO kategori (nama) VALUES('$nama')");
	}else if($button == "Update") {
		$id_kategori = $_GET['id_kategori'];

		mysqli_query($koneksi, "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'");
	}

	header("location: ".BASE_URL."index.php?page=my_profile&module=kategori&action=list"); 
?>
