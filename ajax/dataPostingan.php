<?php
include '../php/connection.php';
include '../php/code.php';
$keyword = $_GET["keyword"];
$user_id = 1;


?>
<?php

$jumlahDataPerHalaman = 9;
$result = mysqli_query($conn, "SELECT * FROM postingan WHERE status = 'Approved'");
$jumlahData = mysqli_num_rows($result);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// var_dump($jumlahHalaman);

$activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

$awalData = ($jumlahDataPerHalaman * $activePage) - $jumlahDataPerHalaman;

$order_by = isset($_GET['order']) ? $_GET['order'] : 'desc';
$order = strtoupper($order_by) == 'ASC' ? 'ASC' : 'DESC';

$fetch_image_query = "SELECT * FROM postingan WHERE 
                        (nama_kegiatan LIKE '%$keyword%' OR
                        gambar LIKE '%$keyword%' OR
                        deskripsi LIKE '%$keyword%' OR
                        jenis_postingan LIKE '%$keyword%') 
                        AND status = 'Approved' ORDER BY waktu_posting $order LIMIT $awalData, $jumlahDataPerHalaman
                        ";
$fetch_image_query_run = mysqli_query($conn, $fetch_image_query);

?>
<?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
    <?php foreach ($fetch_image_query_run as $data) : ?>
        <?php $idPost = $data['id_postingan'] ?>
        <?php
        $bookmarkQuery = "SELECT * FROM bookmark WHERE id_user = $user_id AND id_postingan = $idPost";
        $bookmarkResult = mysqli_query($conn, $bookmarkQuery);
        $isBookmarked = mysqli_num_rows($bookmarkResult) > 0;
        ?>
        <div class="col-lg-4" id="container-post">
            <div class="services-box p-4 mt-4" max-height="500px">
                <a href=" detail.php?id_post=<?= $data['id_postingan'] ?>">
                    <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="random-image" style="max-height: 200px; max-width: 360px;">
                </a>
                <div class="d-flex justify-content-between">
                    <a href=" detail.php?id_post=<?= $data['id_postingan'] ?>">
                        <h5 class="mt-4 text-primary"><?= $data['nama_kegiatan']; ?>
                        </h5>
                    </a>
                    <?php
                    $id_kategori = $data['id_kategori'];
                    // var_dump(query("SELECT nama_kategori FROM kategori WHERE id_kategori = $id_kategori"));
                    $kategori = query("SELECT nama_kategori FROM kategori WHERE id_kategori = $id_kategori")[0];
                    ?>
                    <p class="mt-4 text-primary"><?= $kategori["nama_kategori"] ?></p>
                </div>
                <div class="post-costum">
                    <p class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
                </div>
                <?php $idPost = $data['id_postingan'] ?>
                <div class="mt-3 d-flex justify-content-between">
                    <div>
                        <a href="registrasi.php" class="text-primary f-4" class="btn btn-primary" name="like">
                            <i class="mdi mdi-heart"></i>
                            <?php $result = query("SELECT COUNT(id_suka) AS jumlahLike FROM `suka` WHERE id_postingan = $idPost"); ?>
                            <small><?= $result[0]["jumlahLike"] ?></small>
                        </a>
                        <a href="registrasi.php" class="text-primary f-4" class="btn btn-primary">
                            <i class="mdi mdi-comment ms-2"></i>
                            <?php $result = query("SELECT COUNT(id_komentar) AS jumlahKomentar FROM `komentar` WHERE id_postingan = $idPost"); ?>
                            <small><?= $result[0]["jumlahKomentar"] ?></small>
                        </a>
                    </div>
                    <?php if(isset($_SESSION["id_user"])) : ?>
                    <div>
                        <?php if ($isBookmarked) : ?>
                            <a href="./php/bookmark.php?action=unbookmark&id_post=<?= $data["id_postingan"] ?>" class="btn btn-danger" title="Unbookmark">
                                <i class="mdi mdi-bookmark"></i> Unbookmark
                            </a>
                        <?php else : ?>
                            <a href="./php/bookmark.php?action=bookmark&id_post=<?= $data["id_postingan"] ?>" class="btn btn-primary" title="Bookmark">
                                <i class="mdi mdi-bookmark-outline"></i> Bookmark
                            </a>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>