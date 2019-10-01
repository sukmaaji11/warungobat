<?php 
	if($id_customer){
		header("location: ".BASE_URL);
	}
?>

<div id="container-user-akses">
	<form action="<?php echo BASE_URL."proses_register.php"; ?>" method="POST">

		<?php 
			$notif = isset($_GET['notif']) ? $_GET['notif'] : false;
			$username = isset($_GET['username']) ? $_GET['username'] : false;
			$nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : false;
			$email = isset($_GET['email']) ? $_GET['email'] : false;
			$alamat = isset($_GET['alamat']) ? $_GET['alamat'] : false;

			if($notif == "require"){
				echo "<div class='notif'>Maaf, Anda Harus Melengkapi Form dibawah ini</div>";	
			}else if($notif == "password"){
				echo "<div class='notif'>Maaf Password yang di inputkan tidak sama</div>";	
			}else if($notif == "email"){
				echo "<div class='notif'>Maaf, email yang anda masukkan telah terdaftar</div>";	
			}else if($notif == "username"){
				echo "<div class='notif'>Maaf, username yang anda masukkan telah terdaftar</div>";
			}
		?>
		<div class="element-form">
			<label>Username</label>
			<span><input type="text" name="username" value="<?php echo $username;  ?>"/></span>
		</div>

		<div class="element-form">
			<label>Nama Lenkap</label>
			<span><input type="text" name="nama_lengkap" value="<?php echo $nama_lengkap; ?>"/></span>
		</div>

		<div class="element-form">
			<label>Email</label>
			<span><input type="text" name="email" value="<?php echo $email; ?>"/></span>
		</div>

		<div class="element-form">
			<label>Alamat</label>
			<span><textarea name="alamat"><?php echo $alamat; ?></textarea></span>
		</div>

		<div class="element-form">
			<label>Password</label>
			<span><input type="password" name="password" /></span>
		</div>

		<div class="element-form">
			<label>Re-type Password</label>
			<span><input type="password" name="re_password" /></span>
		</div>

		<div class="element-form">
			<span><input type="submit" value="Register" /></span>
		</div>
	</form>
</div>