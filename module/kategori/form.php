<?php 
	$id_kategori = isset($_GET['id_kategori']) ? $_GET['id_kategori'] : false;
	$nama = "";
	$button = "Tambah";

	if($id_kategori){
		$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori WHERE id_kategori='$id_kategori'");
		$row = mysqli_fetch_assoc($queryKategori);

		$nama = $row['nama'];
		$button = "Update";
	}
?>




<form action="<?php echo BASE_URL."module/kategori/action.php?id_kategori=$id_kategori"; ?>" method="POST">

	<div class="element-form">
		<label>Nama Kategori</label>
		<span><input type="text" name="nama" value="<?php echo $nama; ?>" /></span>
	</div>

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>"/></span>
	</div>

</form>
