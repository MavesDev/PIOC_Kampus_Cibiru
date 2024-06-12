<?php
include "php/connection.php";

session_start();

if (!isset($_SESSION["id_user"])) {
    header("Location: login.php");
    exit;
}

$id_user = $_SESSION['id_user'];
$fetch_image_query = "SELECT * FROM notifikasi WHERE id_user = $id_user";
$fetch_image_query_run = mysqli_query($conn, $fetch_image_query);
?>
<?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
<?php foreach ($fetch_image_query_run as $data) : ?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">
                    Postingan Anda Ditolak
                </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?= htmlspecialchars($data['message']); ?>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>
<?php
// Atur Title
$title = 'Postingan';

ob_start();
// Atur Content Yang Mau Disimpen
include 'template/user/postingan.php';
$content = ob_get_clean();

// Abaikan, Ini Buat Nampilin Template
include 'template/user/template.php';
?>