<?php
session_start();

if($_SESSION['level']==""){
    header("location:../index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Administrator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="content">