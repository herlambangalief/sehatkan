<?php 
include 'koneksi.php';

	$sql_get2="SELECT * FROM kategori_artikel";
	$query_get2=mysqli_query($koneksi,$sql_get2);
	if (isset($_POST['running'])) {
		

		$ukuran	= $_FILES['filez']['size'];
		$file_tmp = $_FILES['filez']['tmp_name'];

		$judul=$_POST['judul_artikel'];
		$gambar = $_FILES['filez']['name'];
		$kategori=$_POST['kategori_artikel'];
		$isi=$_POST['isi_artikel'];
		$tingkat="admin";
		$status="disetujui";

		$sql="INSERT INTO `artikel` (`id_artikel`, `foto_artikel`, `judul_artikel`, `isi_artikel`, `id_kategori_artikel`, `tingkat`, `id_dokter`,`status`) VALUES (NULL, '$gambar', '$judul', '$isi', '$kategori', '$tingkat', NULL,'$status')";

		mysqli_query($koneksi,$sql);
		move_uploaded_file($file_tmp, 'img/'.$gambar);

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
  <link rel="stylesheet"

        href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"

        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"

        crossorigin="anonymous">
	
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
        <li class="breadcrumb-item active">Tambah Artikel</li>
      </ol>
      <form action="" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-file-text "></i>Tambah Data Artikel</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Foto Artikel</label>
						<input type="file" name="filez" class="col-md-12" required onchange="readURL(this);" />
						<br><br><br>
						<img class="col-md-12" id="blah" src="" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Judul Artikel</label>
								<input type="text" class="form-control" required name="judul_artikel" placeholder="Judul Artikel">
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Kategori Artikel</label>
									<select id="bidang" class="form-control col-md-12" required="" name="kategori_artikel">
										<option></option>
										<?php while ($data=mysqli_fetch_array($query_get2)) {?>
											<option value="<?php echo $data['id_kategori_artikel']; ?>"><?php echo $data['nama_kategori_artikel']; ?></option>
										<?php } ?>
									</select>
							</div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Isi Artikel</label>
								<textarea required class="form-control" rows="20" name="isi_artikel" placeholder="Isi Artikel"> </textarea>
							</div>
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
