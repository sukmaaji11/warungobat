<?php 

	include_once("../../function/koneksi.php");
	include_once("../../function/helper.php");

	$id_kategori = $_POST['id_kategori'];
	$nama_obat = $_POST['nama_obat'];
	$deskripsi = $_POST['deskripsi'];
	$harga = $_POST['harga'];
	$tanggal_expire = $_POST['tanggal_expire'];
	$last_update = $_POST['last_update'];
	$button = $_POST['button'];


	$nama_file = $_FILES["file"]["name"];
	move_uploaded_file($_FILES["file"]["tmp_name"], "../../images/obat/".$nama_file);

	if($button == "Tambah"){
		mysqli_query($koneksi, "INSERT INTO obat (nama_obat, id_kategori, deskripsi, file_gambar, harga, tanggal_expire, last_update) VALUES('$nama_obat', '$id_kategori', '$deskripsi', '$nama_file', '$harga', '$tanggal_expire', '$last_update')");
	}//else if($button == "Update") {
		//$id_kategori = $_GET['id_kategori'];

		//mysqli_query($koneksi, "UPDATE kategori SET nama='$nama' WHERE id_kategori='$id_kategori'");
	//}

	header("location: ".BASE_URL."index.php?page=my_profile&module=obat&action=list"); 
?>
