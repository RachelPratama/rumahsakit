<?php
include 'koneksi.php';
$idpelanggan = $_POST['idpelanggan'];
$namapelanggan = $_POST['namapelanggan'];
$alamat = $_POST['alamat'];
$input = mysqli_query($koneksi,"INSERT INTO tblpelanggan VALUES('$idpelanggan','$namapelanggan','$alamat')") or die(mysql_error());
 if($input){
echo "Data Berhasil Disimpan"; 
header("location:pelanggan.php");
}else{
echo "Gagal Disimpan";
}
?>
