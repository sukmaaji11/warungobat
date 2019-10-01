<?php
	session_start();
	
	include_once("function/koneksi.php");
	include_once("function/helper.php");

	$page = isset($_GET['page']) ? $_GET['page'] : false;
	$id_kategori = isset($_GET['id_kategori']) ? $_GET['id_kategori'] : false;

	$id_customer = isset($_SESSION['id_customer']) ? $_SESSION['id_customer'] : false;
	$username = isset($_SESSION['username']) ? $_SESSION['username'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;



?>

<!DOCTYPE html>
<html>
	<head>
		<title>WarungObat | Obat-Obat Sakit</title>
		<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL."css/style.css"; ?>">
		<script src="<?php echo BASE_URL."js/jquery-3.1.1.min.js"; ?>"></script>
		<script src="<?php echo BASE_URL."js/Slides-SlidesJS-3/source/jquery.slides.min.js"; ?>"></script>
	</head>
	<body>
		<div id="container">
			<div id="header">
				<a href="<?php echo BASE_URL."index.php"; ?>">
					<img src="<?php echo BASE_URL."images/logo.png"; ?>"/>
				</a>
			<div id="menu">
				<div id="user">
					<?php
						if($id_customer){
							echo "Hi <b>$username</b>, 
								<a href='".BASE_URL."index.php?page=my_profile&module=pesanan&action=list'>My Profile</a>
								<a href='".BASE_URL."logout.php'>Logout</a> ";
						}else {
							echo "<a href='".BASE_URL."index.php?page=login'>Login</a>
								  <a href='".BASE_URL."index.php?page=register'>Register</a>";
						}
					?>

				</div>
					<a href="<?php echo BASE_URL."index.php?page=keranjang"; ?>" id="button-keranjang">
						<img src="<?php echo BASE_URL."images/cart.png"; ?>"/>
					</a>
				</div>
			</div>

			<div id="content">
				<?php 
					$filename = "$page.php";
					if(file_exists($filename)){
						include_once($filename);
					}else {
						include_once("main.php");
					}
					?>

			</div>
			<div id="footer">
				<p>Copyright WarungObat 2019</p>
			</div>
		</div>
	</body>
	</html>