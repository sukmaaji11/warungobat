<div id="frame-tambah">
	<a href="<?php echo BASE_URL."index.php?page=my_profile&module=obat&action=form"; ?>" class="tombol-action"> + Tambah Obat</a>
</div>

<?php 

	$query = mysqli_query($koneksi, "SELECT obat.*, kategori.nama FROM obat JOIN kategori ON obat.id_kategori=kategori.id_kategori");

	if(mysqli_num_rows($query) == 0) {
		echo "<h3>Saat ini belum ada data obat</h3>";
	} else {

		echo "<table class='table-list'>";

		echo "<tr class='baris-title'>
				<th class='kolom-nomor'>No</th>
				<th class='kiri'>Nama</th>
				<th class='tengah'>Kategori</th>
				<th class='tengah'>Harga</th>
				<th class='tengah'>Last Update</th>
				<th class='kolom-action'>Action<th>
			</tr>";
		$no=1;
		while($row=mysqli_fetch_assoc($query)){
			echo "<tr>
					<td class='tengah'>$no</td>
					<td class='kiri'>$row[nama_obat]</td>
					<td class= 'tengah'>$row[nama]</td>
					<td class='tengah'>".rupiah($row["harga"])."</td>
					<td class='tengah'>$row[last_update]</td>
					<td class='isi-baris-action'>
						<a class='tombol-action' href='".BASE_URL."index.php?page=my_profile&module=obat&action=form&id_obat=$row[id_obat]'>Edit</a>
					</td>
				  </tr>";
			$no++;

		}
		echo "</table>";
	}
?>