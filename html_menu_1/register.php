<?php 
include 'koneksi.php';

	$sql_get2="SELECT * FROM akses";
	$query_get2=mysqli_query($koneksi,$sql_get2);
	if (isset($_POST['running'])) {
		$nama=$_POST['nama'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$email=$_POST['email'];

		$sql="INSERT INTO `user` (`id_user`, `id_akses`, `nama_user`, `username`, `password`, `email`) VALUES (NULL, '1', '$nama', '$username', '$password', '$email')";

		mysqli_query($koneksi,$sql);

		header("location:index.php");
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Find easily a doctor and book online an appointment">
	<meta name="author" content="Ansonika">
	<?php require 'component/title.php'; ?>
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
    
	<!-- BASE CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">
	<link href="css/icon_fonts/css/all_icons_min.css" rel="stylesheet">
    
	<!-- YOUR CUSTOM CSS -->
	<link href="css/custom.css" rel="stylesheet">

</head>

<body>

	<div class="layer"></div>
	<!-- Mobile menu overlay mask -->

	<div id="preloader">
		<div data-loader="circle-side"></div>
	</div>
	<!-- End Preload -->
    
	<?php require 'component/header.php'; ?>
	<!-- /Header -->
	
	<main>
		<div class="bg_color_2">
			<div class="container margin_60_35">
				<div id="register">
					<h1>Please register to Sehatkan</h1>
					<div class="row justify-content-center">
						<div class="col-md-5">
							<form method="post" action="">
								<div class="box_form">
									<div class="form-group">
										<label>Nama</label>
										<input type="text" name="nama" class="form-control" placeholder="Your name">
									</div>
									<div class="form-group">
										<label>Email</label>
										<input type="email" name="email" class="form-control" placeholder="Your email address">
									</div>
									<div class="form-group">
										<label>Username</label>
										<input type="text" name="username" class="form-control" placeholder="Your username">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input type="password" name="password" class="form-control" id="password1" name="password1" placeholder="Your password">
									</div>
									<div class="form-group text-center add_top_30">
										<input class="btn_1" name="running" type="submit" value="Daftar">
									</div>
								</div>
							</form>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /register -->
			</div>
		</div>
	</main>
	<!-- /main -->
	
	<?php require 'component/footer.php'; ?>
	<!--/footer-->

	<div id="toTop"></div>
	<!-- Back to top button -->

	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-2.2.4.min.js"></script>
	<script src="js/common_scripts.min.js"></script>
	<script src="js/functions.js"></script>
     
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/pw_strenght.js"></script>
</body>
</html>