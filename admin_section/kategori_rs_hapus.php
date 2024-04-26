<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM kategori_rs WHERE id_kategori_rs=$id";
  mysqli_query($koneksi,$sql);
  header("location:kategori_rs.php");
?>