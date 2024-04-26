<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM kategori_penyakit WHERE id_kategori_penyakit=$id";
  mysqli_query($koneksi,$sql);
  header("location:kategori_penyakit.php");
?>