<?php
  include 'koneksi.php'; 
  $id=$_GET['id'];

  $sql="DELETE FROM artikel WHERE id_artikel=$id";
  mysqli_query($koneksi,$sql);
  header("location:artikel.php");
?>