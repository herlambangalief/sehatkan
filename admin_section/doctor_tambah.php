<?php 
include 'koneksi.php';

	$sql_get1="SELECT * FROM kategori_penyakit";
	$query_get1=mysqli_query($koneksi,$sql_get1);

	if (isset($_POST['running'])) {
		$ukuran	= $_FILES['filez']['size'];
		$file_tmp = $_FILES['filez']['tmp_name'];

		$nama=$_POST['nama_dokter'];
		$gambar = $_FILES['filez']['name'];
		$kategori=$_POST['kategori_dokter'];
		$jam1=$_POST['jam1_praktek'];
		$jam2=$_POST['jam2_praktek'];
		$operasional=$jam1."-".$jam2;
		$kota=$_POST['kota'];
		$no_str=$_POST['no_str'];
		$tanggal=$_POST['tanggal_lahir'];
    	$tanggal=date('Y-m-d', strtotime($tanggal));
		$profil=$_POST['profil'];
		$tempat_praktik=$_POST['tempat_praktik'];

		$sql="INSERT INTO `dokter` (`id_dokter`, `id_kategori_penyakit`, `nama_dokter`, `profil_dokter`, `foto_dokter`, `jadwal_praktik`, `tempat_praktik`, `kota_dokter`, `nomor_str`, `tanggal_lahir`) VALUES (NULL, '$kategori', '$nama', '$profil', '$gambar', '$operasional', '$tempat_praktik', '$kota', '$no_str', '$tanggal')";
		mysqli_query($koneksi,$sql);
		move_uploaded_file($file_tmp, 'img/'.$gambar);

		header("location:doctor.php");
	}
?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <title>Disehatkan</title>
	
  <!-- Favicons-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
  <!-- GOOGLE WEB FONT -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
	
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <link href="vendor/dropzone.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="css/admin.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="css/admin.css" rel="stylesheet">
	


  <script type="text/javascript">
	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
   </script>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  <?php include 'component/header.php'; ?>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Tambah Dokter</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2>Tambah Dokter</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Foto Dokter</label>
						<input type="file" name="filez" class="col-md-12" required onchange="readURL(this);" />
						<br><br><br>
						<img class="col-md-12" id="blah" src="" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Dokter</label>
								<input type="text" class="form-control" required name="nama_dokter" placeholder="Nama Dokter">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kategori Dokter</label>
								<select class="form-control" required name="kategori_dokter">
									<option></option>
									<?php while ($penyakit=mysqli_fetch_array($query_get1)) {?>
										<option value="<?php echo $penyakit['id_kategori_penyakit']; ?>"><?php echo $penyakit['nama_kategori_penyakit']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group col-md-12">
								<label>Jadwal Praktek</label>
								<div class="form-group row ">
									<input type="time" required class="form-control col-md-6" required name="jam1_praktek">
									<input type="time" required class="form-control col-md-6" required name="jam2_praktek">
								</div>
							</div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Kota Praktek</label>
								<input type="text" required name="kota" class="form-control" placeholder="Kota Praktek">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Nomor STR</label>
								<input type="text" required name="no_str" class="form-control" placeholder="Nomor STR">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" required name="tanggal_lahir" class="form-control" placeholder="Kota Praktek">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Tempat Praktek</label>
									<input class="form-control" required name="tempat_praktik" placeholder="Tempat Praktek">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Profil</label>
									<textarea class="form-control" required name="profil" placeholder="Profil"></textarea>
							</div>
						</div>
					</div>
					
					<!-- /row-->
		</div>
		<!-- /box_general-->
		<p><input type="submit" name="running" class="btn_1 medium" value="Simpan"></p>
		</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <?php include 'component/footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
	<script src="vendor/jquery.selectbox-0.2.js"></script>
	<script src="vendor/retina-replace.min.js"></script>
	<script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
	<!-- Custom scripts for this page-->
	<script src="vendor/dropzone.min.js"></script>
</body>
</html>
