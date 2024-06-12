<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php
if (isset($_SESSION["id_user"])) {
    header("Location: post.php");
    exit;
}
// Atur Title
$title = 'Registrasi';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/user/registrasi.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/template-nonav.php';
?>