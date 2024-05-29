<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php

// Atur Title
$title = 'Home Page';

ob_start();
// Atur Content Yang Mau Disimpen
// include 'template/content.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/template.php';
?>