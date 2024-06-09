<?php
include "php/code.php";

include './php/connection.php';

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
        <div class="row mt-5 pt-4">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Cari Disini" aria-label="Recipient's username" aria-describedby="basic-addon2" id="keyword">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button" id="tombol-cari">Cari</button>
                </div>
            </div>

            <div class="row" id="container-post">
                <?php

                $jumlahDataPerHalaman = 2;
                $result = mysqli_query($conn, "SELECT * FROM postingan");
                $jumlahData = mysqli_num_rows($result);
                $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
                $activePage = (isset($_GET['page'])) ? $_GET['page'] : 1;
                $awalData = ($jumlahDataPerHalaman * $activePage) - $jumlahDataPerHalaman;
                $fetch_image_query = "SELECT * FROM postingan LIMIT $awalData, $jumlahDataPerHalaman";
                $fetch_image_query_run = mysqli_query($conn, $fetch_image_query);

                if (mysqli_num_rows($fetch_image_query_run) > 0) {
                    foreach ($fetch_image_query_run as $data) {
                        $idPost = $data['id_postingan'];
                        $bookmarkQuery = "SELECT * FROM bookmark WHERE id_user = $user_id AND id_postingan = $idPost";
                        $bookmarkResult = mysqli_query($conn, $bookmarkQuery);
                        $isBookmarked = mysqli_num_rows($bookmarkResult) > 0;
                        ?>
                        <div class="col-lg-4" id="container-post">
                            <div class="services-box p-4 mt-4">
                                <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="random-image">
                                <h5 class="mt-4"><?= $data['nama_kegiatan']; ?></h5>
                                <p class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
                                <div class="mt-3 d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="post.php?id=<?= $user_id ?>&id_post=<?= $data["id_postingan"] ?>" class="text-primary f-4" title="Like">
                                            <i class="mdi mdi-heart"></i>
                                            <?php $result = mysqli_query($conn, "SELECT COUNT(id_suka) AS jumlahLike FROM suka WHERE id_postingan = $idPost"); ?>
                                            <small><?= mysqli_fetch_assoc($result)["jumlahLike"] ?></small>
                                        </a>
                                        <a href="comment.php?id_post=<?= $data["id_postingan"] ?>" class="text-primary f-4" title="Comment">
                                            <i class="mdi mdi-comment ms-2"></i>
                                            <?php $result = mysqli_query($conn, "SELECT COUNT(id_komentar) AS jumlahKomentar FROM komentar WHERE id_postingan = $idPost"); ?>
                                            <small><?= mysqli_fetch_assoc($result)["jumlahKomentar"] ?></small>
                                        </a>
                                    </div>
                                    <?php if ($isBookmarked): ?>
                                        <a href="./php/bookmark.php?action=unbookmark&id_post=<?= $data["id_postingan"] ?>" class="btn btn-danger" title="Unbookmark">
                                            <i class="mdi mdi-bookmark"></i> Unbookmark
                                        </a>
                                    <?php else: ?>
                                        <a href="./php/bookmark.php?action=bookmark&id_post=<?= $data["id_postingan"] ?>" class="btn btn-primary" title="Bookmark">
                                            <i class="mdi mdi-bookmark-outline"></i> Bookmark
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
        <!-- Pagination -->
        <nav aria-label="Page navigation example" class="mt-5">
            <ul class="pagination justify-content-center">
                <?php if ($activePage > 1): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $activePage - 1; ?>">Previous</a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <a class="page-link">Previous</a>
                    </li>
                <?php endif; ?>
                <?php for ($i = 1; $i <= $jumlahHalaman; $i++): ?>
                    <?php if ($i == $activePage): ?>
                        <li class="page-item"><a class="page-link active" href="?page=<?= $i; ?>"><?= $i ?></a></li>
                    <?php else: ?>
                        <li class="page-item"><a class="page-link" href="?page=<?= $i; ?>"><?= $i ?></a></li>
                    <?php endif; ?>
                <?php endfor; ?>
                <?php if ($activePage < $jumlahHalaman): ?>
                    <li class="page-item">
                        <a class="page-link" href="?page=<?= $activePage + 1; ?>">Next</a>
                    </li>
                <?php else: ?>
                    <li class="page-item disabled">
                        <a class="page-link" href="#">Next</a>
                    </li>
                <?php endif; ?>
            </ul>
        </nav>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-lg">
        <div class=" modal-content px-3" style="height: 500px;">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Comment</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="container-comment">
                ...
            </div>
            <div class="modal-footer">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Comment" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="button" id="button-addon2">Kirim</button>
                </div>
            </div>
        </div>
    </div>
</div>

 