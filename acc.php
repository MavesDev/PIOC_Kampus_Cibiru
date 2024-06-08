<?php
include "koneksi.php";

if(isset($_GET['number'])) {
    $id_postingan = $_GET['number'];
    
    $update_query = "UPDATE postingan SET status='Approved' WHERE id_postingan='$id_postingan'";
    if(mysqli_query($koneksi, $update_query)) {
        header("Location: dashboard.php");
        
        $insert_query = "INSERT INTO `notifikasi`(`id_user`, `status`, `date`, `type`, `url`, `uniqueid`, `notif_table`, `dilihat`) VALUES ('1','active','01-06-2024','sudah di acc','notif.php','123','postingan sudah di acc','unseen')";
        if(mysqli_query($koneksi, $insert_query)) {
            var_dump("query berhasil");
        }

        exit();
    } else {
        echo "Failed to update post status.";
    }
} else {
    echo "Invalid request.";
}
?>