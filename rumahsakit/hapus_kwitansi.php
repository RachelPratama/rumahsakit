<?php 
 // include database connection file 
 include 'koneksi.php';  
 $idkwitansi = $_GET['idkwitansi']; 
 $result = mysqli_query($koneksi, "DELETE FROM tblkwitansi WHERE idkwitansi='$idkwitansi'"); header("Location:kwitansi.php");  
 ?> 
