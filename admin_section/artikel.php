<?php 
  include 'koneksi.php';

  $sql="SELECT * FROM artikel";
  $query=mysqli_query($koneksi,$sql);
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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Artikel</li>
      </ol>
		<div class="box_general">
			<div class="header_box">
				<h2 class="d-inline-block">Artikel</h2>
        <div style="float: right;"><a href="artikel_tambah.php" class="btn btn-sm btn-success">Tambah Data</a></div>
			</div>
			
					<?php while ($data=mysqli_fetch_array($query)) {
              $pisah=explode(" ",$data['isi_artikel']);
          ?>
            <?php 
              $status=$data['status'];
              if ($status=="disetujui") {
                $status_artikel="<h6 class='text-success'>". $data['status'] ."</h6>";
              }
              else{
                $status_artikel="<h6 class='text-danger'>". $data['status'] ."</h6>";
              }
            ?>
            <div class="list_general">
        <ul>
          <li>
            <figure><img src="img/<?php echo $data['foto_artikel'] ?>"></figure>
            <?php echo $status_artikel; ?>
            <h4><?php echo $data['judul_artikel'] ?></h4>
            <h6>
                    <?php
                      for ($i=0; $i < 34; $i++) { 
                        echo $pisah[$i]." ";
                      }
                      echo ".....";
                    ?>  
            </h6>
            <p><?php echo $data['tingkat'] ?></p>
            <p>
              <div class="" role="group">
                <a href="artikel_detail.php?id=<?php echo $data['id_artikel'] ?>" class="btn btn-sm btn-primary"><i class="fa fa-fw fa-file"></i>Preview</a>

                <a href="artikel_ubah.php?id=<?php echo $data['id_artikel'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-fw fa-pencil"></i>Edit</a>

                <a href="artikel_hapus.php?id=<?php echo $data['id_artikel'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-fw fa-trash"></i>Hapus</a>
              </div>
            </p>
          </li>
          </ul>
      </div>
        <?php } ?>
				
		</div>
		<!-- /pagination-->
	  </div>
	  <!-- /container-fluid-->
   	</div>
    <!-- /container-wrapper-->
    <?php include 'component/footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
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
	
</body>
</html>
