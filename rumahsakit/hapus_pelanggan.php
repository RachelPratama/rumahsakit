<?php 
 // include database connection file 
 include 'koneksi.php';  
 $idpelanggan = $_GET['idpelanggan']; 
 $result = mysqli_query($koneksi, "DELETE FROM tblpelanggan WHERE idpelanggan='$idpelanggan'"); header("Location:pelanggan.php");  
 ?> 
