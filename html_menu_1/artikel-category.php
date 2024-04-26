<?php
	$id=$_GET['id'];
	require 'koneksi.php'; 
	$query=mysqli_query($koneksi,"SELECT * FROM artikel WHERE id_kategori_artikel=$id");
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
			<div class="main_title">
				<h1>Artikel Kesehatan</h1>
				<p>Temukan artikel menarik seputar kesehatan.</p>
			</div>
			<div class="widget">
				<div class="widget-title">
					<h4>Kategori Artikel</h4>
				</div>
				<div class="tags">
					<?php
						$tipe_query=mysqli_query($koneksi,"SELECT * FROM kategori_artikel");
						while ($data=mysqli_fetch_array($tipe_query)) {						?>
							<a href="artikel-category.php?id=<?php echo $data['id_kategori_artikel'] ?>">
								<?php echo $data['nama_kategori_artikel'] ?>
							</a>
							<?php } ?>
				</div>
			</div>
			<!-- /widget -->
			<div class="row">
				<?php if (mysqli_num_rows($query)>0) {?>
				<div class="col-lg-9">
					<?php while ($data=mysqli_fetch_array($query)) {
						$pisah=explode(" ",$data['isi_artikel']);

					?>
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							<div class="col-lg-7">
								<figure>
									<a href="artikel-post.php?id=<?php echo $data['id_artikel'] ?>"><img src="../admin_section/img/<?php echo $data['foto_artikel'] ?>" alt=""><div class="preview"><span>Read more</span></div></a>
								</figure>
							</div>
							<div class="col-lg-4">
								<div class="post_info">
									<h3><a href="artikel-post.php?id=<?php echo $data['id_artikel'] ?>"><?php echo $data['judul_artikel']; ?></a></h3>
									<p>
										<?php for($i=0; $i < 34; $i++){echo $pisah[$i]." ";};?>
									</p>
									<!-- <ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/100x100.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul> -->
								</div>
							</div>
						</div>
					</article>
					<?php } ?>
					<!-- /article -->
				</div>
				<?php } ?>

				<?php if (mysqli_num_rows($query)==0){ ?>
					<div class="col-lg-12">

					
					<article class="blog wow fadeIn">
						<div class="row no-gutters">
							
							<div class="col-lg-12">
								<div class="post_info">
									<center><h1>Maaf Artikel Yang Anda Cari Belum Tersedia</h1></center>
									<!-- <ul>
										<li>
											<div class="thumb"><img src="http://via.placeholder.com/100x100.jpg" alt=""></div> Jessica Hoops
										</li>
										<li><i class="icon_comment_alt"></i> 20</li>
									</ul> -->
								</div>
							</div>
						</div>
					</article>
					<!-- /article -->
				</div>
			<?php } ?>
				<!-- /col -->
				
				<aside class="col-md-12">
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