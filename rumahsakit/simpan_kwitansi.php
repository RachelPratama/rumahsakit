<?php
include 'koneksi.php';

$idkwitansi = $_POST['idkwitansi'];
$idbarang = $_POST['idbarang'];
$idpelanggan = $_POST['idpelanggan'];
$quantity = $_POST['quantity'];
$date = $_POST['date'];
$total = $_POST['total'];
$input = mysqli_query($koneksi,"INSERT INTO tblkwitansi VALUES('$idkwitansi','$idbarang','$idpelanggan','$quantity','$date','$total')") or die(mysql_error($koneksi));
 if($input){
echo "Data Berhasil Disimpan"; 
header("location:kwitansi.php");
}else{
echo "Gagal Disimpan";
}
?>
