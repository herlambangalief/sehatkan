<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM user WHERE id_user=$id";
  mysqli_query($koneksi,$sql);
  header("location:akun.php");
?>