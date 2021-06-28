<?php
// include database connection file 
include 'koneksi.php';
$idkwitansi= $_POST['idkwitansi'];
$idbarang=$_POST['idbarang'];
$idpelanggan=$_POST['idpelanggan'];
$quantity=$_POST['quantity'];
$date=$_POST['date'];
$total=$_POST['total'];
$result = mysqli_query($koneksi, "UPDATE tblkwitansi SET idbarang='$idbarang',idpelanggan='$idpelanggan',quantity='$quantity',date='$date',total='$total' WHERE idkwitansi='$idkwitansi'") or die(mysqli_error($koneksi));
// Redirect to homepage to display updated user in list
header("Location: index.php");
?>
