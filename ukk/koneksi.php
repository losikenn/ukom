<?php
$koneksi = mysqli_connect("localhost","root","","ukk");

//Check connection
if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>