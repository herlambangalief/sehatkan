<?php 
	require 'koneksi.php';
	$id=$_GET['id'];
	$sql="SELECT * FROM penyakit WHERE id_penyakit=$id";
	$query=mysqli_query($koneksi,$sql);
	$fetch=mysqli_fetch_array($query);
?>
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
   
    <!-- SPECIFIC CSS -->
    <link href="css/blog.css" rel="stylesheet">
    
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
		<div id="breadcrumb">
			<div class="container">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Penyakit</a></li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-12">
					<div class="bloglist singlepost">
						<h1><?php echo $fetch['nama_penyakit']; ?></h1>
						
						<!-- /post meta -->
						<div class="post-content">
							<div class="dropcaps">
								<p><?php echo $fetch['pengertian_penyakit']; ?></p>
							</div>

							<br>

							<h4>Gejala Penyakit</h4>
							<p><?php echo $fetch['gejala_penyakit']; ?></p>

							<h4>Penyebab Penyakit</h4>
							<p><?php echo $fetch['penyebab_penyakit']; ?></p>

							<h4>Diagnosis Penyakit</h4>
							<p><?php echo $fetch['diagnosis_penyakit']; ?></p>

							<h4>Pengobatan Penyakit</h4>
							<p><?php echo $fetch['pengobatan_penyakit']; ?></p>

							<h4>Pencegahan Penyakit</h4>
							<p><?php echo $fetch['pencegahan_penyakit']; ?></p>
						</div>
						<!-- /post -->
					</div>
					<!-- /single-post -->
					<div id="comments">
						<h5>Tinggalkan Komentar</h5>
						<?php 
							if (isset($_POST['comment'])) {
						        $nama=$_POST['nama'];
						        $email=$_POST['email'];
						        $komentar=$_POST['komentar'];
						        $date=date('Y-m-d');

						        $sql_masukan_komentar="INSERT INTO komentar VALUES (NULL,'$id','$nama','$email','$komentar','$date')";
						        mysqli_query($koneksi,$sql_masukan_komentar);
						        header("location:artikel-post.php?id=".$id."");
						    }
						?>
						<form method="post" action="">
							<div class="form-group">
								<input type="text" name="nama" id="name2" class="form-control" placeholder="Nama">
							</div>
							<div class="form-group">
								<input type="text" name="email" id="email2" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<textarea class="form-control" name="komentar" id="comments2" rows="6" placeholder="Komentar Anda"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" name="comment" id="submit2" class="btn_1"> Kirim</button>
							</div>
						</form>

						<hr>
						<?php 
							$sql_komentar="SELECT artikel.* , komentar.* FROM artikel,komentar WHERE komentar. id_artikel=$id AND artikel. id_artikel = komentar. id_artikel";
    						$query_komentar=mysqli_query($koneksi,$sql_komentar);
						?>
						<ul>
							<?php while ($komentar=mysqli_fetch_array($query_komentar)) {?>
							<li>
								<!-- <div class="avatar">
									<img src="../admin_section/img/<?php echo $komentar['foto_dokter'] ?>" alt="">
									
								</div> -->
								<div class="comment_right clearfix">
									<div class="comment_info">
										By <?php echo $komentar['nama'] ?>
									</div>
									<p>
										<?php echo $komentar['komentar']; ?>
									</p>
								</div>
							</li>
							<?php } ?>
						</ul>
					</div>
				<!-- /aside -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
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
   
</body>
</html>