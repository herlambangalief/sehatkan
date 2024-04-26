<?php 
	include 'koneksi.php';
	$id=$_GET['id'];
  	$sql="SELECT * FROM artikel WHERE id_artikel=$id";
  	$query=mysqli_query($koneksi,$sql);
  	$data=mysqli_fetch_array($query);

	if (isset($_POST['setuju'])) {
		$sql="UPDATE `artikel` SET `status` = 'disetujui' WHERE `id_artikel` = $id";
		mysqli_query($koneksi,$sql);
		header("location:artikel.php");
	}
	if (isset($_POST['tidak_setuju'])) {
		$sql="UPDATE `artikel` SET `status` = 'tidak_disetujui' WHERE `id_artikel` = $id";
		mysqli_query($koneksi,$sql);
		header("location:artikel.php");
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
        <li class="breadcrumb-item active">Detail Artikel</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
      	<div class="row col-md-12">
      		<button type="submit" name="setuju" class="col-md-6 btn btn-success"><i class="fa fa-check"></i>Setujui</button>
      		<button type="submit" name="tidak_setuju" class="col-md-6 btn btn-danger"><i class="fa fa-times"></i>Tidak Setuju</button>
      	</div>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file-text "></i>Detail Artikel</h2>
			</div>
			<div class="row">
				<div>
					<?php echo "<h1>".$data['judul_artikel']."</h1>"; ?>
				</div>
				<br>
				<div class="col-md-12">
					<div class="form-group">
						<img class="col-md-12" id="blah" src="img/<?php echo $data['foto_artikel'] ?>" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-12 add_top_30">
					<div class="col-md-12">
							<div class="form-group">
								<div>
									<?php echo $data['isi_artikel']; ?>
								</div>
							</div>
					</div>
				</div>
			</div>
					
					<!-- /row-->
		</div>
		
		<!-- /box_general-->
		<p>
			<a href="artikel.php" class="btn btn-success">Kembali</a>
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