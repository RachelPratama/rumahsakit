<?php
// include database connection file
include 'koneksi.php';
 $idpelanggan= $_POST['idpelanggan'];
 $namapelanggan=$_POST['namapelanggan'];
 $alamat=$_POST['alamat'];
 $result = mysqli_query($koneksi, "UPDATE tblpelanggan SET
namapelanggan='$namapelanggan',alamat='$alamat', WHERE idpelanggan='$idpelanggan'");
 // Redirect to homepage to display updated user in list
 header("Location: pelanggan.php");
?>