<?php
  // Nanti Kalau Mau Buat Tampilan Baru, Tinggal Copas File Ini Ganti Nama. Contoh liat ada File Post.php

  // Atur Title
  $title = 'Kelola User';

  ob_start();
  // Atur Content Yang Mau Disimpen
  include 'template/admin/kelola_user.php';
  $content = ob_get_clean();

  // Abaikan, Ini Buat Nampilin Template
  include 'template/admin/template.php';
?>