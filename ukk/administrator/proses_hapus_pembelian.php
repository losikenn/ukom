<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$pelanggan_id = $_POST['pelanggan_id'];

//menghapus data
mysqli_query($koneksi, "DELETE FROM penjualan WHERE pelanggan_id=$pelanggan_id");
mysqli_query($koneksi, "DELETE FROM pelanggan WHERE pelanggan_id=$pelanggan_id");


//mengalihkan
header("location:pembelian.php?pesan=hapus");

?>