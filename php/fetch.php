<?php

include "connection.php";

$data = [];

if (isset($_POST['key']) && $_POST['key'] == '123') {
    $n_number = mysqli_query($conn, "SELECT * FROM notifikasi WHERE status='active' ORDER BY id_notifikasi DESC");
    $total = mysqli_num_rows($n_number);


    array_push($data, (object)[
        'total' => $total,
    ]);

    $fetch_notif_table = mysqli_query($conn, "SELECT * FROM notifikasi ORDER BY id_notifikasi DESC LIMIT 0, 10");
    if (mysqli_num_rows($fetch_notif_table) > 0) {
        while ($row = mysqli_fetch_assoc($fetch_notif_table)) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
};

if (isset($_POST['key']) && ($_POST['key'] == '1234')) {
    $countActive = mysqli_query($conn, "UPDATE notifikasi SET status='nonactive' WHERE status='active'");
}

if (!isset($_POST['key']) && empty($_POST['key'])) {
    echo "API ERROR";
}
