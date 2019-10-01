<?php 
	$id_obat= isset($_GET['id_obat']) ? $_GET['id_obat'] : false;
	$nama_obat = "";
	$deskripsi = "";
	$harga = "";
	$file_gambar = "";
	$tanggal_expire = "";
	$last_update = "";	
	$button = "Tambah";

	if($id_obat){
		$query = mysqli_query($koneksi, "SELECT * FROM obat WHERE id_obat='$id_obat'");
		$row = mysqli_fetch_assoc($query);
			$nama_obat = $row['nama_obat'];
			$id_kategori = $row['id_kategori'];
			$deskripsi = $row['deskripsi'];
			$file_gambar = $row['file_gambar'];
			$harga = $row['harga'];
			$tanggal_expire = $row['tanggal_expire'];
			$last_update = $row['last_update'];
			$button = "Update";

			$file_gambar = "<img src='".BASE_URL."images/obat/$file_gambar'/>";
	}
?>




<form action="<?php echo BASE_URL."module/obat/action.php?id_obat=$id_obat"; ?>" method="POST" enctype="multipart/form-data">

	<div class="element-form">
		<label>Kategori</label>
		<span>
			<select name="id_kategori">
				<?php 
					$query = mysqli_query($koneksi, "SELECT * FROM kategori ORDER BY nama ASC");
					while($row=mysqli_fetch_assoc($query)) {
						if($id_kategori == $row['id_kategori']){
							echo "<option value='$row[id_kategori]' selected='true'>$row[nama]</option>";
						} else {
						echo "<option value='$row[id_kategori]'>$row[nama]</option>";
					}
					}		
				?>
			</select>
		</span>
	</div>

	<div class="element-form">
		<label>Nama Obat</label>
		<span><input type="text" name="nama_obat" value="<?php echo $nama_obat; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Deskripsi</label>
		<span><textarea name="deskripsi"><?php echo $deskripsi; ?></textarea></span>
	</div>

	<div class="element-form">
		<label>Harga</label>
		<span><input type="text" name="harga" value="<?php echo $harga; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Expired</label>
		<span><input type="text" name="tanggal_expire" placeholder="Tahun/Bulan/Tanggal" value="<?php echo $tanggal_expire; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Last Update</label>
		<span><input type="text" name="last_update" placeholder="Tahun/Bulan/Tanggal" value="<?php echo $last_update; ?>" /></span>
	</div>

	<div class="element-form">
		<label>Gambar Produk</label>
		<span><input type="file" name="file"/><?php echo $file_gambar; ?></span>
	</div>

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>"/></span>
	</div>

</form>
