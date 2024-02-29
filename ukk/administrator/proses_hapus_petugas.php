<?php
//koneksi database
include '../koneksi.php';

//menangkap data yang dikirim
$id_petugas = $_POST['id_petugas'];

//menghapus data
mysqli_query($koneksi,"delete from petugas where id_petugas='$id_petugas'");

//mengalihkan
header("location:data_pengguna.php?pesan=hapus");

?>