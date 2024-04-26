<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM kategori_artikel WHERE id_kategori_artikel=$id";
  mysqli_query($koneksi,$sql);
  header("location:kategori_artikel.php");
?>