<?php 
	$id=$_GET['id'];
	require 'koneksi.php';
	$sql="SELECT * FROM rumah_sakit WHERE id_rs=$id";
	$query=mysqli_query($koneksi,$sql);
	$fetch=mysqli_fetch_array($query);
	$id_rs=$fetch['id_kategori_rs'];
	$kategori=mysqli_query($koneksi,"SELECT * FROM kategori_rs WHERE id_kategori_rs=$id_rs");
	$kategori_rs=mysqli_fetch_array($kategori);

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
					<li><a href="#">Rumah Sakit</a></li>
					<li>Detail Rumah Sakit</li>
				</ul>
			</div>
		</div>
		<!-- /breadcrumb -->
		
		<div class="container margin_60">
			<div class="row">
				<aside class="col-xl-3 col-lg-4" id="sidebar">
					<div class="box_profile">
						<figure>
							<img src="../admin_section/img/<?php echo $fetch['foto_rs']; ?>" alt="" width="100%" class="img-fluid">
						</figure>
						<h4><?php echo $kategori_rs['nama_kategori_rs'] ?></h4>
						<h1><?php echo $fetch['nama_rs']; ?></h1>
						<span class="rating">
							<small>(<?php echo $fetch['jam_operasional_rs'] ?>)</small>
						</span>
						<ul class="contacts">
							<li><h6>Kota</h6><?php echo $fetch['lokasi_rs'] ?></li>
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
									<h3>Profil Rumah Sakit</h3>
									<p><?php echo $fetch['bidang_rs'] ?></p>
								</div>
								<div class="wrapper_indent">
									<p><?php echo $fetch['profil_rs']; ?></p>
									<!-- /row-->
								</div>
								<hr>
								<div class="indent_title_in">
									<i class="pe-7s-user"></i>
									<h3>Dokter</h3><br>
									<?php 
										$dokterList = explode(',', $fetch['dokter']);
										foreach ($dokterList as $dokter) {
											echo "<h6>$dokter</h6>\n";
										}
									?>
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
												<td>Rawat Inap</td>
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