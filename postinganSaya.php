<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php
session_start();
if (!isset($_SESSION["id_user"])) {
    header("Location: login.php");
    exit;
}
// Atur Title
$title = 'Profile';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/postingan-saya.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/template-nonav.php';
?>