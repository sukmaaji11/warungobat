<?php
      
    $id_customer = isset($_GET['id_customer']) ? $_GET['id_customer'] : false;
      
	$button = "Update";
	$queryCustomer = mysqli_query($koneksi, "SELECT * FROM customer WHERE id_customer='$id_customer'");
	 
	$row=mysqli_fetch_array($queryCustomer);
	  
		$username = $row["username"];
		$nama_lengkap = $row["nama_lengkap"];
		$email = $row["email"];
		$alamat = $row["alamat"];
		$level = $row["level"];
?>
<form action="<?php echo BASE_URL."module/customer/action.php?id_customer=$id_customer"?>" method="POST">
	  
	<div class="element-form">
		<label>Username</label>	
		<span><input type="text" name="nama" value="<?php echo $username; ?>" /></span>
	</div>	
	
	<div class="element-form">
		<label>Nama Lengkap</label>	
		<span><input type="text" name="nama" value="<?php echo $nama_lengkap; ?>" /></span>
	</div>	

	<div class="element-form">
		<label>Email</label>	
		<span><input type="text" name="email" value="<?php echo $email; ?>" /></span>
	</div>		

	<div class="element-form">
		<label>Alamat</label>	
		<span><input type="text" name="alamat" value="<?php echo $alamat; ?>" /></span>
	</div>		

	<div class="element-form">
		<label>Level</label>	
		<span>
			<input type="radio" value="admin" name="level" <?php if($level == "admin"){ echo "checked"; } ?> /> Admin
			<input type="radio" value="customer" name="level" <?php if($level == "customer"){ echo "checked"; } ?> /> Customer			
		</span>
	</div>	

	<div class="element-form">
		<span><input type="submit" name="button" value="<?php echo $button; ?>" class="submit-my-profile" /></span>
	</div>	
</form>