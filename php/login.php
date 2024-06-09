<?php
session_start();
$servername = "localhost"; // Ganti dengan nama server database Anda
$username = "root"; // Ganti dengan username database Anda
$password = ""; // Ganti dengan password database Anda
$dbname = "pioc"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Mengecek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Menyiapkan query SQL untuk memeriksa email dan password
    $sql = "SELECT * FROM user WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    // Memeriksa apakah ada hasil yang cocok
    if ($result->num_rows > 0) {
        // Login berhasil
        $_SESSION['email'] = $email;
        header("Location: ../post.php"); // Ganti dengan halaman setelah login
        exit();
    } else {
        // Login gagal
        echo "Email atau password salah.";
    }

    $stmt->close();
}

$conn->close();
?>