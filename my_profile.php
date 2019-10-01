<?php 
 	if($id_customer){
 		$module =isset($_GET['module']) ? $_GET['module'] : false;
 		$action =isset($_GET['action']) ? $_GET['action'] : false;
 		$mode =isset($_GET['mode']) ? $_GET['mode'] : false;
 	} else {
 		header("location: ".BASE_URL."index.php?page=login");
 	}

?>


<div id="bg-page-profile">
	<div id="menu-profile">
		<ul>
			<li>
				<a <?php if($module== "kategori"){ echo "class='active'"; }?> href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=list"; ?>">Kategori</a>
			</li>
				<li>
				<a <?php if($module== "obat"){ echo "class='active'"; }?> href="<?php echo BASE_URL."index.php?page=my_profile&module=obat&action=list"; ?>">Obat</a>
			</li>
				<li>
				<a <?php if($module== "customer"){ echo "class='active'"; }?> href="<?php echo BASE_URL."index.php?page=my_profile&module=customer&action=list"; ?>">Customer</a>
			</li>
			<li>
				<a <?php if($module== "banner"){ echo "class='active'"; }?> href="<?php echo BASE_URL."index.php?page=my_profile&module=banner&action=list"; ?>">Banner</a>
			</li>
			<li>
				<a <?php if($module== "order"){ echo "class='active'"; }?> href="<?php echo BASE_URL."index.php?page=my_profile&module=order&action=list"; ?>">Order</a>
			</li>
		</ul>
	</div>
	<div id="profile-content">
		<?php
			$file = "module/$module/$action.php";
			if(file_exists($file)){
				include_once($file);
			}else {
				echo "<h3>Maaf, Halaman tersebut tidak ditemukan</h3>";
			}
		?>
	</div>

</div>