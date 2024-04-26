<?php 
include 'koneksi.php';

	$sql_get1="SELECT * FROM kategori_penyakit";
	$query_get1=mysqli_query($koneksi,$sql_get1);

	if (isset($_POST['running'])) {

		$nama=$_POST['nama_penyakit'];
		$kategori=$_POST['kategori_penyakit'];
		$pengertian=$_POST['pengertian_penyakit'];
		$gejala=$_POST['gejala_penyakit'];
		$penyebab=$_POST['penyebab_penyakit'];
		$diagnosis=$_POST['diagnosis_penyakit'];
		$pengobatan=$_POST['pengobatan_penyakit'];
		$pencegahan=$_POST['pencegahan_penyakit'];

		$sql="INSERT INTO `penyakit` (`id_penyakit`, `nama_penyakit`, `id_kategori_penyakit`, `pengertian_penyakit`, `gejala_penyakit`, `penyebab_penyakit`, `diagnosis_penyakit`, `pengobatan_penyakit`, `pencegahan_penyakit`) VALUES (NULL, '$nama', '$kategori', '$pengertian', '$gejala', '$penyebab', '$diagnosis', '$pengobatan', '$pencegahan')";

		mysqli_query($koneksi,$sql);

		header("location:penyakit.php");
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
        <li class="breadcrumb-item active">Tambah Penyakit</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-certificate"></i>Tambah Data Penyakit</h2>
			</div>
			<div class="row">
				
				<div class="col-md-12 add_top_30">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Penyakit</label>
								<input type="text" class="form-control" required name="nama_penyakit" placeholder="Nama Penyakit">
							</div>
						</div>
						
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Pengertian Penyakit</label>
								<textarea rows="4" class="form-control" required name="pengertian_penyakit" placeholder="Pengertian Penyakit"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Gejala Penyakit</label>
								<textarea rows="4" class="form-control" required name="gejala_penyakit" placeholder="Gejala Penyakit"></textarea>
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Penyebab Penyakit</label>
								<textarea rows="4" class="form-control" required name="penyebab_penyakit" placeholder="Penyebab Penyakit"></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Diagnosis Penyakit</label>
								<textarea rows="4" class="form-control" required name="diagnosis_penyakit" placeholder="Diagnosis Penyakit"></textarea>
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Pengobatan Penyakit</label>
								<textarea rows="10" class="form-control" required name="pengobatan_penyakit" placeholder="Pengobatan Penyakit"></textarea>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Pencegahan Penyakit</label>
								<textarea rows="10" class="form-control" required name="pencegahan_penyakit" placeholder="Pencegahan Penyakit"></textarea>
							</div>
						</div>
					</div>
					<div class="col-md-12">
							<div class="form-group">
								<label>Kategori Penyakit</label>
								<select class="form-control" required="" name="kategori_penyakit">
									<option></option>
									<?php while ($data=mysqli_fetch_array($query_get1)) {?>
										<option value="<?php echo $data['id_kategori_penyakit']; ?>"><?php echo $data['nama_kategori_penyakit']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					<!-- /row-->
				</div>
			</div>
					
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
	<script src="vendor/nicEdit.js"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>
</body>
</html>
