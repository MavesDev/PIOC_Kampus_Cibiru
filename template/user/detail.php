<?php

include "php/code.php";

$data = $_GET["id_post"];

?>

<section class="section bg-services" id="services">
    <div class="container w-50">
        <?php
            $idPost = $data;
            $detailData = query("SELECT * FROM postingan WHERE id_postingan = $idPost");
        ?>
        <?php foreach($detailData as $data) : ?>
        <img src="imgUpload/<?= $data['gambar'];?>" class="img-fluid rounded">
        <h4 class="mt-4"><?= $data['nama_kegiatan'];?></h4>
        <p class="text-muted mt-3">
            <?= $data['deskripsi'];?>
        </p>
        <div class="mt-3">
            <a href="post.php?id=<?= $_SESSION["id"] ?>&id_post=<?= $idPost ?>" class="text-primary f-2"
                class="btn btn-primary" name="like">
                <i class="mdi mdi-heart"></i>
                <?php $result = query("SELECT COUNT(id_suka) AS jumlahLike FROM `suka` WHERE id_postingan = $idPost"); ?>
                <small><?= $result[0]["jumlahLike"] ?></small>
            </a>
            <a href="comment.php?id_post=<?= $idPost ?>" class="text-primary f-2" class="btn btn-primary">
                <i class="mdi mdi-comment ms-2"></i>
                <?php $result = query("SELECT COUNT(id_komentar) AS jumlahKomentar FROM `komentar` WHERE id_postingan = $idPost"); ?>
                <small><?= $result[0]["jumlahKomentar"] ?></small>
            </a>
        </div>
        <?php endforeach; ?>
    </div>
</section>

</div>