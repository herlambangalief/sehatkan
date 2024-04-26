<?php 
	$koneksi=mysqli_connect("localhost","root","","sehatkan");

	if ($koneksi) {
		
	}
	else{
		echo "<script>alert('Koneksi ke database gagal')</script>";
	}
?>