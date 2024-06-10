<?php
session_start();
include './php/connection.php';

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['id_user'])) {
    die("Anda harus login untuk melihat bookmark.");
}

$user_id = $_SESSION['id_user'];

$query = "SELECT b.id_postingan, p.nama_kegiatan, p.deskripsi, p.gambar 
          FROM bookmark b
          JOIN postingan p ON b.id_postingan = p.id_postingan
          WHERE b.id_user = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Bookmarks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }

    .title-box {
        margin-bottom: 40px;
    }

    .title-heading {
        font-size: 2em;
        font-weight: bold;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .col-lg-4 {
        flex: 1 1 300px;
        max-width: 300px;
    }

    .services-box {
        background: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.3s;
    }

    .services-box:hover {
        transform: translateY(-10px);
    }

    .services-box img {
        width: 100%;
        height: auto;
        border-bottom: 2px solid #007bff;
    }

    .services-box h5 {
        margin: 15px;
        font-size: 1.2em;
        font-weight: bold;
        color: #333;
    }

    .services-box p {
        margin: 0 15px 15px;
        color: #666;
    }

    .services-box a {
        display: block;
        margin: 0 15px 15px;
        text-decoration: none;
        color: #007bff;
    }

    .services-box a:hover {
        text-decoration: underline;
    }

    .no-bookmarks {
        text-align: center;
        font-size: 1.5em;
        color: #888;
        margin-top: 50px;
    }
    </style>
</head>

<body>
    <section class="section bg-services" id="bookmarks">
        <div class="container">
            <div class="title-box text-center">
                <h3 class="title-heading mt-4">My Bookmarks</h3>
                <img src="images/home-border.png" height="15" class="mt-3" alt="">
            </div>
            <div class="row mt-5 pt-4">
                <?php
                if ($result->num_rows > 0) {
                    while ($bookmark = $result->fetch_assoc()) { ?>
                <div class="col-lg-4" id="container-post">
                    <div class="services-box p-4 mt-4">
                        <img src="imgUpload/<?= htmlspecialchars($bookmark['gambar']); ?>" alt="random-image">
                        <h5><?= htmlspecialchars($bookmark['nama_kegiatan']); ?></h5>
                        <p><?= htmlspecialchars($bookmark['deskripsi']); ?></p>
                        <a href="detail.php?id_post=<?= htmlspecialchars($bookmark['id_postingan']); ?>"
                            class="text-primary f-4" title="View Post">
                            <i class="fas fa-eye"></i> View Post
                        </a>
                        <a href="php/bookmark.php?action=unbookmark&id_post=<?= $bookmark['id_postingan'] ?>"
                            class="btn btn-danger">Unbookmark</a>
                    </div>
                </div>
                <?php }
                } else { ?>
                <p class="no-bookmarks">No bookmarks found.</p>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

</html>

<?php
$stmt->close();
$conn->close();
?>