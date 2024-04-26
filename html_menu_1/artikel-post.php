<?php
	$id=$_GET['id'];
	require 'koneksi.php';
	$sql="SELECT * FROM artikel WHERE id_artikel=$id";
	$query=mysqli_query($koneksi,$sql);
	$fetch=mysqli_fetch_array($query);
	$id_artikel=$fetch['id_kategori_artikel'];
	$kategori=mysqli_query($koneksi,"SELECT * FROM kategori_artikel WHERE id_kategori_artikel=$id_artikel");
	$kategori_artikel=mysqli_fetch_array($kategori);

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
					<li><a href="index.php">Home</a></li>
					<li><a href="artikel.php">Artikel</a></li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<div class="col-lg-9">
					<div class="bloglist singlepost">
						<p><img alt="" class="img-fluid" src="../admin_section/img/<?php echo $fetch['foto_artikel'] ?>"></p>
						<h1><?php echo $fetch['judul_artikel']; ?></h1>
						<div class="postmeta">
							<ul>
								<li><a href="#"><i class="icon_tags"></i> <?php echo $kategori_artikel['nama_kategori_artikel']; ?></a></li>
								<li><a href="#"><i class="icon_pencil-edit"></i> <?php echo $fetch['tingkat']; ?></a></li>
								<li><a href="#"><i class="icon_comment_alt"></i> (14) Comments</a></li>
							</ul>
						</div>
						<!-- /post meta -->
						<div class="post-content">
							<?php echo $fetch['isi_artikel']; ?>
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
						<h5>Comments</h5>
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

				</div>
				<!-- /col -->
				
				<aside class="col-lg-3">
					
					<div class="widget">
						<div class="widget-title">
							<h4>Kategori Artikel</h4>
						</div>
						<div class="tags">
							<?php
								$tipe_query=mysqli_query($koneksi,"SELECT * FROM kategori_artikel");
								while ($data=mysqli_fetch_array($tipe_query)) {
									
							?>
							<a href="artikel-category.php?id=<?php echo $data['id_kategori_artikel'] ?>">
								<?php echo $data['nama_kategori_artikel'] ?>
							</a>
							<?php } ?>
						</div>
					</div>
					<!-- /widget -->

					<div class="widget">
						<div class="widget-title">
							<h4><b>Terbaru</b></h4>
							<?php $query1=mysqli_query($koneksi,"SELECT * FROM artikel ORDER BY id_artikel LIMIT 5") ?>
						</div>
						<ul class="comments-list">
							<?php while ($data1=mysqli_fetch_array($query1)) {
								$pisah1=explode(" ",$data1['judul_artikel']);
							?>
							<li>
								<div class="alignleft">
									<a href=""><img src="../admin_section/img/<?php echo $data1['foto_artikel'] ?>" alt=""></a>
								</div>
								<h3><a href="artikel-post.php?id=<?php echo $data1['id_artikel'] ?>" title=""><?php for($i=0; $i < 3; $i++){echo $pisah1[$i]." ";};?></a></h3>
							</li>
							<?php } ?>
						</ul>
					</div>
					<!-- /widget -->
					<!-- /widget -->

					
				</aside>
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