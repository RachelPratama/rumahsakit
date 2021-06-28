<?php
// include database connection file
include 'koneksi.php';
 $idbarang= $_POST['idbarang'];
 $namabarang=$_POST['namabarang'];
 $harga=$_POST['harga'];
 $result = mysqli_query($koneksi, "UPDATE tblbarang SET
namabarang='$namabarang',harga='$harga', WHERE idbarang='$idbarang'");
 // Redirect to homepage to display updated user in list
 header("Location: barang.php");
?>