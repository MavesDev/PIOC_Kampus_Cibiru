<?php
include "code.php"; 
include "../php/connection.php"; 


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyiapkan query SQL untuk memeriksa email
    $sql = "SELECT * FROM user WHERE email = ?";
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    // Memeriksa apakah ada hasil yang cocok
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        // Cek Password salah atau tidak
        if ($password == $row['password']) {
            // Login berhasil
            $_SESSION['email'] = $email;
            $_SESSION['id_user'] = $row["id_user"];
            $_SESSION['nama_user'] = $row["nama_user"];
            $_SESSION['bio'] = $row['bio'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['password'] = $row['password'];

            // Uji Level
            if ($row['role'] == 'Admin') {
                $_SESSION['admin'] = $email;
                header("Location: ../dashboard.php");
            } else if ($row['role'] == 'user') {
                $_SESSION['user'] = $email;
                header("Location: ../post.php");
            }
            exit();
        } else {
            // Password salah
            echo "Password salah.";
        }
    } else {
        // Email tidak ditemukan
        echo "Email tidak ada.";
    }

    $stmt->close();
}

$connection->close();
?>
