<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php
session_start();

// Atur Title
$title = 'Home Page';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/user/postingan.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/navbar.php';
?>