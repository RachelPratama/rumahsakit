<?php
include 'koneksi.php';

$idbarang = $_POST['idbarang'];
$namabarang = $_POST['namabarang'];
$harga = $_POST['harga'];
$input = mysqli_query($koneksi,"INSERT INTO tblbarang VALUES('$idbarang','$namabarang','$harga')") or die(mysql_error($koneksi));
 if($input){
echo "Data Berhasil Disimpan"; 
header("location:barang.php");
}else{
echo "Gagal Disimpan";
}
?>
