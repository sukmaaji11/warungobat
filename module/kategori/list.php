<div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol-action"> + Tambah Kategori</a>
</div>

<?php 

	$queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");

	if(mysqli_num_rows($queryKategori) == 0) {
		echo "<h3>Saat ini belum ada nama kategori obat</h3>";
	} else {

		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='kolom-nama'>Nama</th>
				<th class='kolom-action'>Action<th>
			</tr>";
		$no=1;
		while($row=mysqli_fetch_assoc($queryKategori)){
			echo "<tr>
					<td class='isi-baris-no'>$no</td>
					<td class='isi-baris-nama'>$row[nama]</td>
					<td class='isi-baris-action'>
						<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=kategori&action=form&id_kategori=$row[id_kategori]'>Edit</a>
					</td>
				  </tr>";
			$no++;

		}
		echo "</table>";
	}
?>