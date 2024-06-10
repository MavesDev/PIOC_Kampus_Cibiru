<?php
include "php/connection.php";

if(isset($_GET['number'])) {
    $id_postingan = $_GET['number'];
    
    // Update query
    $update_query = "UPDATE postingan SET status='Approved' WHERE id_postingan='$id_postingan'";
    if(mysqli_query($conn, $update_query)) {
        // Redirect to dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Failed to update post status.";
    }
} else {
    echo "Invalid request.";
}
?>
