<?php 
	include 'koneksi.php';
	$id=$_GET['id'];


	$sql="SELECT * FROM dokter WHERE id_dokter=$id";
    $query=mysqli_query($koneksi,$sql);
    $data=mysqli_fetch_array($query);
	$id_kategori=$data['id_kategori_penyakit'];
	$jam=$data['jadwal_praktik'];
	$jam_explode=explode("-",$jam);
	$jam1=$jam_explode[0];
	$jam2=$jam_explode[1];

	$sql_get1="SELECT * FROM kategori_penyakit";
	$query_get1=mysqli_query($koneksi,$sql_get1);

	$gets=mysqli_query($koneksi,"SELECT * FROM kategori_penyakit WHERE id_kategori_penyakit=$id_kategori");
	$set=mysqli_fetch_array($gets);

	
    if (isset($_POST['hapus'])) {
    	$sql_delete="DELETE FROM dokter WHERE id_dokter=$id";
    	mysqli_query($koneksi,$sql_delete);
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
        <li class="breadcrumb-item active">Detail Dokter</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2></i>Detail Dokter</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Foto Dokter</label>
						<img class="col-md-12" id="blah" src="img/<?php echo $data['foto_dokter'] ?>" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Dokter</label>
								<input type="text" class="form-control" readonly="" name="nama_dokter" placeholder="Nama Dokter" value="<?php echo $data['nama_dokter'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Kategori Dokter</label>
								<select class="form-control" readonly="" name="kategori_dokter">
									<option disabled=""><?php echo $set['nama_kategori_penyakit']; ?></option>
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
									<input type="time" class="form-control col-md-6" readonly="" name="jam1_praktek" value="<?php echo $jam1 ?>">
									<input type="time" class="form-control col-md-6" readonly="" name="jam2_praktek" value="<?php echo $jam2 ?>">
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
								<input type="text" name="kota" readonly="" class="form-control" placeholder="Kota Praktek" value="<?php echo $data['kota_dokter'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Nomor STR</label>
								<input type="text" name="no_str" readonly="" class="form-control" placeholder="Nomor STR" value="<?php echo $data['nomor_str'] ?>">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Tanggal Lahir</label>
								<input type="date" name="tanggal_lahir" readonly="" class="form-control" placeholder="Tanggal Lahir" value="<?php echo $data['tanggal_lahir'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Tempat Praktek</label>
									<input class="form-control" readonly="" name="tempat_praktik" placeholder="Tempat Praktek" value="<?php echo $data['tempat_praktik'] ?>">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Profil</label>
									<textarea class="form-control" readonly="" name="profil" placeholder="Profil"><?php echo $data['profil_dokter'] ?></textarea>
							</div>
						</div>
					</div>
					
					<!-- /row-->
		</div>
		<!-- /box_general-->
		<p>
			<a href="doctor_ubah.php?id=<?php echo $id ?>" class="btn btn-warning">Ubah</a>
			<input type="submit" name="hapus" class="btn btn-danger" value="Hapus">
		</p>
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
