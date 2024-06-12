    <?php
    include "php/connection.php";

    session_start();

    if(isset($_GET['number'])) {
        $id_postingan = $_GET['number'];
        $user_id = $_GET['id_user'];
        
        $update_query = "UPDATE postingan SET status='Approved' WHERE id_postingan='$id_postingan'";
        if(mysqli_query($conn, $update_query)) {
            header("Location: dashboard.php");
            
            $insert_query = "INSERT INTO `notifikasi`(`id_user`, `status`, `date`, `type`, `url`, `uniqueid`, `notif_table`, `dilihat`) VALUES ('$user_id','active','01-06-2024','🎉 Selamat! Postingan Anda telah disetujui.','notif.php','123','postingan sudah di acc','unseen')";
            if(mysqli_query($conn, $insert_query)) {
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