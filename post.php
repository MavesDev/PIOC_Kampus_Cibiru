<?php
// Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php

// Atur Title
$title = 'Postingan';

ob_start();
// Atur Content Yang Mau Disimpen
// include 'template/postingan.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/template.php';
?>