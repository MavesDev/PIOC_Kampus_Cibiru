<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php
session_start();

// Atur Title
$title = 'Profile';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/profile.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/template-nonav.php';
?>