<?php
// Konfigurasi database
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "pioc";

// Buat koneksi
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $nama_user = $_POST['nama_user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Siapkan dan bind
    $stmt = $conn->prepare("INSERT INTO user (nama_user, email, password, role) VALUES (?, ?, ?, 'user')");
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("sss", $nama_user, $email, $password);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Tutup statement dan koneksi
    $stmt->close();
}
$conn->close();
?>