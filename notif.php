<?php

include "./php/connection.php";

function seenNotifications($data){
    global $conn;
    mysqli_query($conn, "UPDATE notifikasi SET dilihat='seen' WHERE uniqueid='$data'");
}

if (isset($_GET['notification'])) {
    $uniqueid = $_GET['notification'];
    seenNotifications($uniqueid);
    echo "Notifikasi sudah dilihat <a href='index.php'>Kembali</a>";
}
