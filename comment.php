<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php

session_start();
$_SESSION["id"] = 1;

// Atur Title
$title = 'Comment Page';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/user/comment.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/template.php';
?>