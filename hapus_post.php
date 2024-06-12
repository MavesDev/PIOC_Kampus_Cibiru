<?php

include "php/connection.php";

$id_postingan = $_GET['number'];
var_dump($_GET);

mysqli_query($conn, "DELETE FROM postingan WHERE id_postingan = $id_postingan");

if(mysqli_affected_rows($conn)>0){
    echo "data berhasil di hapus";
    header("location:kelola_postingan.php");

} else {"data gagal di hapus";
echo mysqli_error($conn);
}