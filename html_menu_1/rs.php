<?php 
	require 'koneksi.php';
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$perPage = 5;
	$offset = ($page - 1) * $perPage;

	$sql = "SELECT * FROM rumah_sakit ORDER BY nama_rs LIMIT $perPage OFFSET $offset";
	$query = $koneksi->query($sql);


	$totalSql = "SELECT COUNT(*) AS total FROM rumah_sakit";
	$totalResult = $koneksi->query($totalSql);
	$totalRow = $totalResult->fetch_assoc();
	$totalItems = $totalRow['total'];
	$totalPages = ceil($totalItems / $perPage);
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
   
    <!-- SPECIFIC CSS -->
    <link href="css/date_picker.css" rel="stylesheet">
    
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
				<div class="row">
	               <div class="col-md-6">
	                   <h6 style="color:white;"><strong>Home > </strong> Rumah Sakit</h6>
	               </div>
	               <div class="col-md-6">
	               	<form method="GET" action="rs.php" class="search_bar_list">
							    <input class="form-control" type="text" placeholder="Search..." aria-label="Search" name="query">
							    <input type="submit" value="Search">
							</form>
	                </div>
            	</div>
         	</div>
		</div>
   <!-- /results -->
	   
	<div class="container margin_60_35">
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php while ($data=mysqli_fetch_array($query)) {
						$kat_rs=$data['id_kategori_rs'];
						$kategori=mysqli_query($koneksi,"SELECT * FROM kategori_penyakit WHERE id_kategori_penyakit=$kat_rs");
						$kat=mysqli_fetch_array($kategori);
					?>
					<div class="col-md-4">
						<div class="box_list wow fadeIn" style="height:75vh;">
							<figure>
								<a href="rs-detail.php?id=<?php echo $data['id_rs'] ?>"><img src="../admin_section/img/<?php echo $data['foto_rs'] ?>" class="img-fluid" width="100%" alt="">
									<div class="preview"><span>Read more</span></div>
								</a>
							</figure>
							<div class="wrapper">
								<small><?php echo $data['bidang_rs'] ?></small>
								<a href="rs-detail.php?id=<?php echo $data['id_rs'] ?>">
									<h3><?php echo $data['nama_rs'] ?></h3>
									<p><?php echo $data['lokasi_rs']; ?></p>
								</a>
								<span class="rating">
									<small>(<?php echo $data['jam_operasional_rs'] ?>)</small>
								</span>
								<a href="badges.html" data-toggle="tooltip" data-placement="top" data-original-title="Badge Level" class="badge_list_1"><img src="" width="15" height="15" alt=""></a>
							</div>
						</div>
					</div>
					<?php }?>
				</div>
				<!-- /row -->

				<?php 
					echo "<div class='container'>";
					echo "<ul class='pagination justify-content-left'>";
					for ($i = 1; $i <= $totalPages; $i++) {
					    echo "<h5><li class='page-item'><a class='page-link' href='?page=$i'>$i</a></li></h5>";
					}
					echo "</ul>";
					echo "</div>";
				?>
				<!-- /pagination -->
			</div>
			<!-- /col -->
			
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
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/markerclusterer.js"></script>
    <script src="js/map_listing.js"></script>
    <script src="js/infobox.js"></script>

</body>
</html>