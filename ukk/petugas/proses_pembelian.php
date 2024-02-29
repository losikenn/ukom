<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$pelanggan_id = $_POST['pelanggan_id'];
$nama_pelanggan = $_POST['nama_pelanggan'];
$nomor_telepon = $_POST['nomor_telepon'];
$alamat = $_POST['alamat'];

//menginput data
mysqli_query($koneksi,"insert into pelanggan values('$pelanggan_id','$nama_pelanggan','$alamat','$nomor_telepon')");
mysqli_query($koneksi, "INSERT INTO penjualan (pelanggan_id) VALUES ('$pelanggan_id')");


//mengalihkan
header("location:pembelian.php?pesan=simpan");

?>