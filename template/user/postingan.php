<?php

include "php/code.php";

// ID pengguna harus didapat dari sumber yang valid, misalnya login atau request
// Untuk contoh ini, kita akan menggunakan ID pengguna tetap (misalnya, $user_id = 1)
$user_id = 1; // Gantilah dengan ID pengguna yang sebenarnya

if (isset($_GET["id"])) {
    if (addLike($_GET) > 0) {
        echo "
            <script>
                alert('berhasil ditambahkan!');
                document.location.href = 'post.php';
            </script>
        ";
    } else {
        echo "
            <script>alert('gagal ditambahkan!');
                document.location.href = 'post.php';
            </script>
        ";
    }
}

?>

<section class="section bg-services" id="services">
    <div class="container">
        <?php

        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
            if ($_SESSION['status'] === '<b>Data Berhasil Masuk</b>, Mohon Menunggu Persetujuan Admin') {
        ?>
        <div class="alert alert-success" role="alert">
            <?php echo $_SESSION['status'] ?>
        </div>
        <?php
            } else {
            ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION['status'] ?>
        </div>
        <?php
            }
            ?>
        <?php
            unset($_SESSION['status']);
        }
        ?>
        <div class="row">
            <div class="col-lg-12">
                <div class="title-box text-center">
                    <h3 class="title-heading mt-4">Pusat Informasi Kampus Cibiru</h3>
                    <p class="text-muted f-17 mt-3">Jendela Informasi Terdepan Kampus Cibiru yang selalu
                        <i><b>up-to-date</b></i> di genggaman Anda! <br>Dapatkan Semua Informasi dengan Mudah Melalui
                        Website yang user-friendly!
                    </p>
                    <img src="images/home-border.png" height="15" class="mt-3" alt="">
                </div>
            </div>
        </div>

        <?php include "upload.php" ?>


        <div class="row mt-5 pt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Disini" aria-label="Recipient's username"
                    aria-describedby="basic-addon2" id="keyword">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="tombol-cari">Cari</button>
                </div>
            </div>

            <div class="row" id="container-post">
                <?php
                include './php/connection.php';

                $jumlahDataPerHalaman = 2;
                $result = mysqli_query($conn, "SELECT * FROM postingan WHERE status = 'Approved'");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                // var_dump($jumlahHalaman);

                $activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;

                $awalData = ($jumlahDataPerHalaman * $activePage) - $jumlahDataPerHalaman;

                $fetch_image_query = "SELECT * FROM postingan WHERE status = 'Approved' LIMIT $awalData, $jumlahDataPerHalaman";
                $fetch_image_query_run = mysqli_query($connection, $fetch_image_query);

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
                            <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block"
                                alt="random-image" style="max-height: 200px; max-width: 360px;">
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
                                <a href="post.php?id=<?= $_SESSION["id"] ?>&id_post=<?= $data["id_postingan"] ?>"
                                    class="text-primary f-4" class="btn btn-primary" name="like">
                                    <i class="mdi mdi-heart"></i>
                                    <?php $result = query("SELECT COUNT(id_suka) AS jumlahLike FROM `suka` WHERE id_postingan = $idPost"); ?>
                                    <small><?= $result[0]["jumlahLike"] ?></small>
                                </a>
                                <a href="comment.php?id_post=<?= $data["id_postingan"] ?>" class="text-primary f-4"
                                    class="btn btn-primary">
                                    <i class="mdi mdi-comment ms-2"></i>
                                    <?php $result = query("SELECT COUNT(id_komentar) AS jumlahKomentar FROM `komentar` WHERE id_postingan = $idPost"); ?>
                                    <small><?= $result[0]["jumlahKomentar"] ?></small>
                                </a>
                            </div>
                            <div>
                                <?php if ($isBookmarked): ?>
                                <a href="./php/bookmark.php?action=unbookmark&id_post=<?= $data["id_postingan"] ?>"
                                    class="btn btn-danger" title="Unbookmark">
                                    <i class="mdi mdi-bookmark"></i> Unbookmark
                                </a>
                                <?php else: ?>
                                <a href="./php/bookmark.php?action=bookmark&id_post=<?= $data["id_postingan"] ?>"
                                    class="btn btn-primary" title="Bookmark">
                                    <i class="mdi mdi-bookmark-outline"></i> Bookmark
                                </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>

        </div>
        <nav aria-label="Page navigation example" class="mt-5">
            <ul class="pagination justify-content-center">
                <?php if ($activePage > 1) : ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $activePage - 1; ?>">Previous</a>
                </li>
                <?php else : ?>
                <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
                <?php if ($i == $activePage) : ?>
                <li class=" page-item"><a class="page-link active" href="?page=<?= $i; ?>"><?= $i ?></a>
                </li>
                <?php else : ?>
                <li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i ?></a></li>
                <?php endif; ?>
                <?php endfor; ?>
                <?php if ($activePage < $jumlahHalaman) : ?>
                <li class="page-item">
                    <a class="page-link" href="?page=<?= $activePage + 1; ?>">Next</a>
                </li>
                <?php else : ?>
                <li class="page-item disabled">
                    <a class="page-link" href="#">Next</a>
                </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>


</div>