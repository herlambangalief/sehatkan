<?php 
	$id=$_GET['id'];
	require 'koneksi.php';
	$sql="SELECT * FROM dokter WHERE id_dokter=$id";
	$query=mysqli_query($koneksi,$sql);
	$fetch=mysqli_fetch_array($query);
	$id_dokter=$fetch['id_kategori_penyakit'];
	$kategori=mysqli_query($koneksi,"SELECT * FROM kategori_penyakit WHERE id_kategori_penyakit=$id_dokter");
	$kategori_penyakit=mysqli_fetch_array($kategori);

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

	<!-- Favicons-->
	
    
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
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Dokter</a></li>
					<li>Detail Dokter</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="../admin_section/img/<?php echo $fetch['foto_dokter']; ?>" alt="" width="100%" class="img-fluid">
						</figure>
						<h1><?php echo $fetch['nama_dokter']; ?></h1>
						<span class="rating">
							<?php 
								for ($i=0; $i < $fetch['rating_dokter']; $i++) { 
											echo "<i class='icon_star voted'></i>";
								} 
								if ($i<5) {
									for ($j=$i; $j < 5; $j++) { 
										echo "<i class='icon_star'></i>";
									} 
								}
							?>
							<small>(<?php echo $fetch['jadwal_praktik'] ?>)</small>
						</span>
						<ul class="contacts">
							<li><h6>Kota</h6><?php echo $fetch['kota_dokter'] ?></li>
							<li><h6>Tempat Praktik</h6><?php echo $fetch['tempat_praktik'] ?></li>
						</ul>
					</div>
				</aside>
				<!-- /asdide -->
				
				<div class="col-xl-9 col-lg-8">
					<!-- /box_general -->
					
					<div class="tabs_styled_2">
						<!--/nav-tabs -->

						<div class="tab-content">
							<div class="tab-pane fade show active" id="general" role="tabpanel" aria-labelledby="general-tab">
								<div class="indent_title_in">
									<i class="pe-7s-user"></i>
									<h3>Profil Dokter</h3>
									<p><?php echo $kategori_penyakit['nama_kategori_penyakit'] ?></p>
								</div>
								<div class="wrapper_indent">
									<p><?php echo $fetch['profil_dokter']; ?></p>
									<!-- /row-->
								</div>
								<hr>
								<div class="indent_title_in">
									<i class="pe-7s-cash"></i>
									<h3>Service</h3>
								</div>
								<div class="wrapper_indent">
									<div class="table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Service - Visit</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Kunjungan Pertama</td>
											</tr>
											<tr>
												<td>Konsultasi</td>
											</tr>
											<tr>
												<td>Pengobatan</td>
											</tr>
											<tr>
												<td>Perawatan</td>
											</tr>
											<tr>
												<td>Operasi</td>
											</tr>
										</tbody>
									</table>
									</div>
								</div>
								<!--  End wrapper_indent -->

							</div>
							<!-- /tab_3 -->
						</div>
						<!-- /tab-content -->
					</div>
					<!-- /tabs_styled -->
				</div>
				<!-- /col -->
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
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
			$('#calendar').datepicker({
			    todayHighlight: true,
				daysOfWeekDisabled: [0],
				weekStart: 1,
			    format: "yyyy-mm-dd",
    			datesDisabled: ["2017/10/20", "2017/11/21","2017/12/21", "2018/01/21","2018/02/21","2018/03/21"],
			});
	</script>
     

</body>
</html>