<?php 
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PALMS MARKET</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><img src="img/photo_2022-11-14_09-49-49-removebg-preview.png" width="35px" style="margin-bottom:-5px;"><a href="dashboard.php">PALMS MARKET</a></h1>

			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>WELCOME TO PALMS MARKET !</h4>
			</div>
		</div>
	</div>

	<!-- footer -->
	<footer>
		<div class="container">
			<small>Copyright &copy; 2022 - PalmsMarket.</small>
		</div>
	</footer>
</body>
</html>