<div id="kiri">
	<div id="menu-kategori">
		<ul>
			<?php 
				$query = mysqli_query($koneksi, "SELECT * FROM kategori ");
				while ($row=mysqli_fetch_assoc($query)) {
					echo "<li><a href='".BASE_URL."index.php?id_kategori=$row[id_kategori]'>$row[nama]</a></li>";
				}
			?>
		</ul>
	</div>
</div>

<div id="kanan">
	<div id="frame-barang">
	
		<ul>
			<?php
				
				if($id_kategori){
					$query = mysqli_query($koneksi, "SELECT * FROM obat WHERE id_kategori='$id_kategori' ORDER BY rand() DESC LIMIT 9");
				}else{
					$query = mysqli_query($koneksi, "SELECT * FROM obat ORDER BY rand() DESC LIMIT 9");
				}
				
				$no=1;
				while($row=mysqli_fetch_assoc($query)){
					
					$style=false;
					if($no == 3){
						$style="style='margin-right:0px'";
						$no=0;
					}
					
					echo "<li $style>
							<p class='price'>".rupiah($row['harga'])."</p>
							<a href='".BASE_URL."index.php?page=detail&id_obat=$row[id_obat]'>
								<img src='".BASE_URL."images/obat/$row[file_gambar]' />
							</a>
							<div class='keterangan-gambar'>
								<p><a href='".BASE_URL."index.php?page=detail&id_obat=$row[id_obat]'>$row[nama_obat]</a></p>	
							</div>
							<div class='button-add-cart'>
								<a href='".BASE_URL."tambah_keranjang.php?id_obat=$row[id_obat]'>+ add to cart</a>
							</div>";
					
					$no++;
				}
			
			?>
		</ul>
	
	</div>

</div>