<?php
include '../php/connection.php';
include '../php/code.php';
$keyword = $_GET["keyword"];

$fetch_image_query = "SELECT * FROM postingan WHERE 
                        (nama_kegiatan LIKE '%$keyword%' OR
                        gambar LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' OR
                        jenis_postingan LIKE '%$keyword%') 
                        AND status = 'Approved'
                        ";
$fetch_image_query_run = mysqli_query($conn, $fetch_image_query);
?>

<?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
<?php foreach ($fetch_image_query_run as $data) : ?>
<div class="col-lg-4" id="container-post">
    <div class="services-box p-4 mt-4">
        <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="random-image">
        <h5 class="mt-4"><?= $data['nama_kegiatan']; ?></h5>
        <p class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
        <?php $idPost = $data['id_postingan'] ?>
        <div class="mt-3">
            <a href="post.php?id=<?= $_SESSION["id"] ?>&id_post=<?= $data["id_postingan"] ?>" class="text-primary f-4"
                class="btn btn-primary" name="like">
                <i class="mdi mdi-heart"></i>
                <?php $result = query("SELECT COUNT(id_suka) AS jumlahLike FROM `suka` WHERE id_postingan = $idPost"); ?>
                <small><?= $result[0]["jumlahLike"] ?></small>
            </a>
            <a href="comment.php?id_post=<?= $data["id_postingan"] ?>" class="text-primary f-4" class="btn btn-primary">
                <i class="mdi mdi-comment ms-2"></i>
                <?php $result = query("SELECT COUNT(id_komentar) AS jumlahKomentar FROM `komentar` WHERE id_postingan = $idPost"); ?>
                <small><?= $result[0]["jumlahKomentar"] ?></small>
            </a>
        </div>
    </div>
</div>
<?php endforeach; ?>
<?php endif; ?>