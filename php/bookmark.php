<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'connection.php';  // Pastikan jalur ke connection.php benar

// ID pengguna dan postingan harus didapat dari sumber yang valid, misalnya login atau request
// Untuk contoh ini, kita akan menggunakan ID pengguna tetap (misalnya, $user_id = 1)
$user_id = $_SESSION['id_user']; // Gantilah dengan ID pengguna yang sebenarnya
$post_id = isset($_GET['id_post']) ? intval($_GET['id_post']) : 0; // Pastikan id_post valid

if ($post_id <= 0) {
    die("ID postingan tidak valid.");
}

// Cek apakah action bookmark atau unbookmark
$action = isset($_GET['action']) ? $_GET['action'] : '';

$stmt = null; // Inisialisasi $stmt dengan null

if ($action === 'bookmark') {
    // Cek apakah sudah ada data dengan kombinasi id_user dan id_postingan yang sama
    $checkQuery = "SELECT * FROM bookmark WHERE id_user = ? AND id_postingan = ?";
    $stmtCheck = $conn->prepare($checkQuery);
    $stmtCheck->bind_param("ii", $user_id, $post_id);
    $stmtCheck->execute();
    $resultCheck = $stmtCheck->get_result();

    if ($resultCheck->num_rows == 0) {
        // Jika tidak ada, maka insert
        $query = "INSERT INTO bookmark (id_user, id_postingan, waktu_bookmark) VALUES (?, ?, NOW())";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ii", $user_id, $post_id);
        $result = $stmt->execute();

        if ($result) {
            echo "Bookmark berhasil ditambahkan.";
        } else {
            echo "Terjadi kesalahan: " . $conn->error;
        }
    } else {
        echo "Postingan sudah di-bookmark sebelumnya.";
    }

    $stmtCheck->close();

} elseif ($action === 'unbookmark') {
    // Hapus bookmark berdasarkan id_user dan id_postingan
    $query = "DELETE FROM bookmark WHERE id_user = ? AND id_postingan = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ii", $user_id, $post_id);
    $result = $stmt->execute();

    if ($result) {
        echo "Bookmark berhasil dihapus.";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

} else {
    die("Aksi tidak valid.");
}

// Cek apakah $stmt sudah diinisialisasi sebelum menutupnya
if ($stmt !== null) {
    $stmt->close();
}

$conn->close();
?>