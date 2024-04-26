<?php 
	include 'koneksi.php';
	$id=$_GET['id'];

	$sql_get1="SELECT * FROM kategori_rs";
	$query_get1=mysqli_query($koneksi,$sql_get1);
	$sql_get2="SELECT * FROM kategori_penyakit";
	$query_get2=mysqli_query($koneksi,$sql_get2);
	$sql_get3="SELECT * FROM dokter";
	$query_get3=mysqli_query($koneksi,$sql_get3);

	$sql="SELECT * FROM rumah_sakit WHERE id_rs=$id";
    $query=mysqli_query($koneksi,$sql);
    $data=mysqli_fetch_array($query);
	$id_kategori=$data['id_kategori_rs'];
	$jam=$data['jam_operasional_rs'];
	$jam_explode=explode("-",$jam);
	$jam1=$jam_explode[0];
	$jam2=$jam_explode[1];

	$bidang=$data['bidang_rs'];
	$bidang_explode=explode(",",$bidang);
	$dokter=$data['dokter'];
	$dokter_explode=explode(",",$dokter);

	$gets=mysqli_query($koneksi,"SELECT * FROM kategori_rs WHERE id_kategori_rs=$id_kategori");
	$set=mysqli_fetch_array($gets);

    if (isset($_POST['ubah'])) {

    	if ($gambar = $_FILES['filez']['name']=="") {
    		$gambar=$data['foto_rs'];
    	}
    	else{
    		$ukuran	= $_FILES['filez']['size'];
			$file_tmp = $_FILES['filez']['tmp_name'];
			$gambar = $_FILES['filez']['name'];
			move_uploaded_file($file_tmp, 'img/'.$gambar);
    	}
    	

		$nama=$_POST['nama_rs'];
		$kategori=$_POST['kategori_rs'];
		$jam1=$_POST['jam1_rs'];
		$jam2=$_POST['jam2_rs'];
		$operasional=$jam1."-".$jam2;
		$alamat=$_POST['alamat_rs'];
		$deskripsi=$_POST['deskripsi_rs'];
		$bidang=$_POST['category'];
		$dokter=$_POST['doctor'];

    	$sql_update="UPDATE `rumah_sakit` SET `id_kategori_rs` = '$kategori', `nama_rs` = '$nama', `foto_rs` = '$gambar', `lokasi_rs` = '$alamat', `jam_operasional_rs` = '$operasional', `bidang_rs` = '$bidang', `dokter` = '$dokter', `profil_rs` = '$deskripsi' WHERE `id_rs` = $id ";
    	mysqli_query($koneksi,$sql_update);
    	header("location:rs.php");
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
				<h2><i class="fa fa-hospital-o"></i>Tambah Obat</h2>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
					<label>Foto Obat</label>
						<input type="file" name="filez" class="col-md-12" onchange="readURL(this);" />
						<br><br><br>
						<img class="col-md-12" id="blah" src="img/<?php echo $data['foto_rs'] ?>" alt="your image" />
				    </div>
				</div>
				
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Nama Rumah Sakit</label>
								<input type="text" class="form-control" name="nama_rs" value="<?php echo $data['nama_rs'] ;?>">
								<input type="" hidden="" id="category" name="category" value="<?php echo $data['bidang_rs']; ?>">
								<input type="" hidden="" id="doctor" name="doctor" value="<?php echo $data['dokter']; ?>">
							</div>
						</div>
					</div>
					<!-- /row-->
				</div>
			</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Alamat Rumah Sakit</label>
								<textarea required="" class="form-control" name="alamat_rs" ><?php echo $data['lokasi_rs'] ?></textarea>
							</div>
							<div class="form-group">
								<label>Deskripsi Rumah Sakit</label>
								<textarea required="" class="form-control" name="deskripsi_rs" ><?php echo $data['profil_rs'] ?></textarea>
							</div>
							<div class="row">
						<div class="col-md-12">
							<div class="form-group col-md-12">
								<label>Jam Operasional</label>
								<div class="form-group row ">
									<input type="time" class="form-control col-md-6" required name="jam1_rs"
									value="<?php echo $jam1 ?>">
									<input type="time" class="form-control col-md-6" required name="jam2_rs"value="<?php echo $jam2 ?>">
								</div>
							</div>
						</div>
					</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Kategori Rumah Sakit</label>
								<select class="form-control" name="kategori_rs">
									<option disabled="" style="background: #efefef" value="<?php echo $set['id_kategori_rs'] ;?>"><?php echo $set['nama_kategori_rs'] ;?></option>
									<?php while ($data=mysqli_fetch_array($query_get1)) {?>
										<option value="<?php echo $data['id_kategori_rs']; ?>"><?php echo $data['nama_kategori_rs']; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Bidang Rumah Sakit</label>
								<div class="row">
									<select id="bidang" class="form-control col-md-10" name="kategori_penyakit">
										<option></option>
										<?php while ($data=mysqli_fetch_array($query_get2)) {?>
											<option><?php echo $data['nama_kategori_penyakit']; ?></option>
										<?php } ?>
									</select>
									<button type="button" class="btn btn-success" onclick="tambah1()"><i class="fa fa-plus"></i></button>
								</div>
							</div>
							<div class="form-group">
								<table id="data1" class="table">
									<?php foreach($bidang_explode as $key => $value) { ?>
										<tr>
											<td><input readonly='' id='bidangs"+nob+"' style='border:0px;' type='text' value="<?php echo $value ?>"></td>
										</tr>
									<?php } ?>
								</table>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Dokter</label>
								<div class="row">
									<select id="dokter" class="form-control col-md-10"  name="dokter">
										<option></option>
										<?php while ($data=mysqli_fetch_array($query_get3)) {?>
											<option ><?php echo $data['nama_dokter']; ?></option>
										<?php } ?>
									</select>
									<button type="button" class="btn btn-success" onclick="tambah2()"><i class="fa fa-plus"></i></button>
								</div>
							</div>
							<div class="form-group">
								<table id="data2" class="table">
									<?php foreach($dokter_explode as $key => $value) { ?>
										<tr>
											<td><input readonly='' id='bidangs"+nod+"' style='border:0px;' type='text' value="<?php echo $value ?>"></td>
										</tr>
									<?php } ?>
								</table>
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
	<script type="text/javascript">
	var nob=0;
	function tambah1(){
		var bidang=document.getElementById("bidang").value;
		nob++;
		document.getElementById("data1").innerHTML+="<tr><td><input readonly='' id='bidangs"+nob+"' style='border:0px;' type='text' value='"+bidang+"''></td></tr>";
		document.getElementById("category").value+=bidang+";";
	}
	var nod=0;
	function tambah2(){
		var dokter=document.getElementById("dokter").value;
		nod++;
		document.getElementById("data2").innerHTML+="<tr><td><input readonly='' id='dokters"+nod+"' style='border:0px;' type='text' value='"+dokter+"''></td></tr>";
		document.getElementById("doctor").value+=dokter+";";
	}
	</script>
	
</body>
</html>
