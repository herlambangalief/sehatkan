<?php 
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql="SELECT * FROM obat WHERE id_obat=$id";
    $query=mysqli_query($koneksi,$sql);
    $data=mysqli_fetch_array($query);

    if (isset($_POST['ubah'])) {

    	if ($gambar = $_FILES['filez']['name']=="") {
    		$gambar=$data['foto_obat'];
    	}
    	else{
    		$ukuran	= $_FILES['filez']['size'];
			$file_tmp = $_FILES['filez']['tmp_name'];
			$gambar = $_FILES['filez']['name'];
			move_uploaded_file($file_tmp, 'img/'.$gambar);
    	}
    	

		$nama=$_POST['nama_obat'];
		$golongan=$_POST['golongan_obat'];
		$kemasan=$_POST['kemasan_obat'];
		$produsen=$_POST['produsen_obat'];
		$deskripsi=$_POST['deskripsi_obat'];
		$manfaat=$_POST['manfaat_obat'];
		$komposisi=$_POST['komposisi_obat'];
		$dosis=$_POST['dosis_obat'];
		$aturan=$_POST['aturan_pakai'];

    	$sql_update="UPDATE obat SET `nama_obat` = '$nama',`foto_obat` = '$gambar', `golongan_obat` = '$golongan', `kemasan_obat` = '$kemasan', `produsen_obat` = '$produsen', `deskripsi_obat` = '$deskripsi', `manfaat_obat` = '$manfaat', `komposisi_obat` = '$komposisi', `dosis_obat` = '$dosis', `aturan_pakai_obat` = '$aturan' WHERE id_obat=$id";
    	mysqli_query($koneksi,$sql_update);
    	header("location:obat.php");
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
        <li class="breadcrumb-item active">Tambah Obat</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-medkit"></i>Tambah Obat</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Foto Obat</label>
						<input type="file" id="gambar" name="filez" class="col-md-12" required onchange="readURL(this);" />
						<br><br><br>
						<img class="col-md-12" id="blah" src="img/<?php echo $data['foto_obat'] ?>" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Nama Obat</label>
								<input id="nama" required type="text" class="form-control" name="nama_obat" value="<?php echo $data['nama_obat'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Golongan Obat</label>
								<input required type="text" class="form-control" name="golongan_obat" value="<?php echo $data['golongan_obat'] ?>">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Kemasan Obat</label>
								<input required type="text" class="form-control" name="kemasan_obat" value="<?php echo $data['kemasan_obat'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Produsen Obat</label>
								<input required type="text" class="form-control" name="produsen_obat" value="<?php echo $data['produsen_obat'] ?>">
							</div>
						</div>
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Dosis Obat</label>
								<input required type="text" class="form-control" name="dosis_obat" value="<?php echo $data['dosis_obat'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Aturan Pakai</label>
								<input required type="text" class="form-control" name="aturan_pakai" value="<?php echo $data['aturan_pakai_obat'] ?>">
							</div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Deskripsi Obat</label>
								<textarea required rows="10" class="form-control" name="deskripsi_obat" ><?php echo $data['deskripsi_obat'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Komposisi</label>
								<textarea required rows="6" class="form-control" name="komposisi_obat"><?php echo $data['komposisi_obat'] ?></textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Manfaat Obat</label>
								<textarea required rows="6" class="form-control" name="manfaat_obat"><?php echo $data['manfaat_obat'] ?></textarea>
							</div>
						</div>
					</div>
					
					<!-- /row-->
		</div>
		
		<!-- /box_general-->
		<p>
			<input type="submit" name="ubah" class="btn btn-warning" value="Ubah">
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
	<script src="vendor/nicEdit.js"></script>
  <script type="text/javascript">
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  </script>
	
</body>
</html>
