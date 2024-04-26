<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM pasien WHERE id_pasien=$id";
  mysqli_query($koneksi,$sql);
  header("location:user.php");
?>