<?php

include "koneksi.php";

$id_user = $_GET['number'];
var_dump($_GET);

mysqli_query($koneksi, "DELETE FROM user WHERE id_user = $id_user");

if(mysqli_affected_rows($koneksi)>0){
    echo "data berhasil di hapus";
    header("location:kelola_user.php");

} else {"data gagal di hapus";
echo mysqli_error($koneksi);
}
