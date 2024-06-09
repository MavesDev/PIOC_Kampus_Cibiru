<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pioc";

$koneksi = mysqli_connect($host, $username, $password); // mysql -h localhost -u root

mysqli_select_db($koneksi, $database) or die ("database tidak ditemukan"); //koneksi database USE db_training

// echo "koneksi berhasil";
?>