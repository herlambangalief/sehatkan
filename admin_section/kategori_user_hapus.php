<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM akses WHERE id_akses=$id";
  mysqli_query($koneksi,$sql);
  header("location:kategori_user.php");
?>