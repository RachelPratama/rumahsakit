<?php 
 // include database connection file 
 include 'koneksi.php';  
 $idbarang = $_GET['idbarang']; 
 $result = mysqli_query($koneksi, "DELETE FROM tblbarang WHERE idbarang='$idbarang'"); header("Location:barang.php");  
 ?> 
