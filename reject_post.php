<?php
include "koneksi.php";

if ($_POST) {
    $id_postingan = $_POST['id_postingan'];
    $alasan = $_POST['alasan'];

    $updateQuery = "UPDATE postingan SET status='Rejected' WHERE id_postingan='$id_postingan'";
    $updateResult = mysqli_query($koneksi, $updateQuery);

    if ($updateResult) {
        $postQuery = "SELECT id_user, nama_kegiatan FROM postingan WHERE id_postingan='$id_postingan'";
        $postResult = mysqli_query($koneksi, $postQuery);
        $postData = mysqli_fetch_assoc($postResult);

        $id_user = $postData['id_user'];
        $nama_kegiatan = $postData['nama_kegiatan'];

        $notifQuery = "INSERT INTO notifikasi (
                            id_user, status, date, type, url, uniqueid, notif_table, dilihat, message
                        ) VALUES (
                            '$id_user', 'nonactive', NOW(), 'Post Rejected', 'notif.php', '$id_postingan', 'postingan', 'unseen', 'Postingan anda \"$nama_kegiatan\" ditolak. Karena: $alasan'
                        )";
        mysqli_query($koneksi, $notifQuery);

        header("Location: dashboard.php?status=success");
    } else {
        header("Location: dashboard.php?status=error");
    }
} else {
    header("Location: dashboard.php");
}
?>