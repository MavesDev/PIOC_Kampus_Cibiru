<?php session_start() ?>
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

            <?php
            $connection = mysqli_connect("localhost", "root", "", "pioc");

            $fetch_image_query = "SELECT * FROM postingan ";
            $fetch_image_query_run = mysqli_query($connection, $fetch_image_query);

            if (mysqli_num_rows($fetch_image_query_run) > 0) {
                foreach ($fetch_image_query_run as $data) {
            ?>
                    <div class="col-lg-4">
                        <div class="services-box p-4 mt-4">
                            <img src="../imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="random-image">
                            <h5 class="mt-4"><?= $data['nama_kegiatan']; ?></h5>
                            <p class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
                            <div class="mt-3">
                                <a href="" class="text-primary f-4" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="mdi mdi-heart"></i>
                                    <i class="mdi mdi-comment ms-2"></i>
                                </a>
                            </div>

                        </div>
                <?php
                }
            }

                ?>



                    </div>

                    <div class="col-lg-4">
                <div class="services-box p-4 mt-4">
                    <img src="https://picsum.photos/500/300" class="img-thumbnail mx-auto d-block img-fluid"
                        alt="random-image">

                    <h5 class="mt-4">Instagram Ads</h5>
                    <p class="text-muted mt-3">Vestibulum eu tortor artett tortor rhoncus porta quis on metus morbi
                        comodo nisi vitae neque aliquam aliquam.</p>

                    <div class="mt-3">
                        <a href="" class="text-primary f-4" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="mdi mdi-heart"></i>
                            <i class="mdi mdi-comment ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="services-box p-4 mt-4">
                    <img src="https://picsum.photos/500/300" class="img-thumbnail mx-auto d-block" alt="random-image">

                    <h5 class="mt-4">Youtube Ads</h5>
                    <p class="text-muted mt-3">Aliquam dictum mollis sem sed hendrerit tempus sed class aptent
                        taciti sociosqu
                        litora conubia himenaeos.</p>

                    <div class="mt-3">
                        <a href="" class="text-primary f-4" type="button" class="btn btn-primary" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="mdi mdi-heart"></i>
                            <i class="mdi mdi-comment ms-2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>
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
            <div class="modal-body">
                <div class="comment-content">
                    <div class="d-flex align-middle justify-content-center mb-3" style="max-width: 100%;">
                        <div class="img-comment me-3">
                            <img src="https://picsum.photos/50" class="rounded" alt="random-image">
                        </div>
                        <div>
                            <div class="main-comment d-flex flex-column">
                                <h6>Nama Orang</h6>
                                <p style="margin-bottom: 0.8rem;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo odit
                                    rem. Ea velit
                                    laboriosam tenetur optio quas facere ipsam!
                                </p>

                                <div class="d-flex align-middle justify-content-center mb-3">
                                    <div class="img-comment me-3">
                                        <img src="https://picsum.photos/40" class="rounded" alt="random-image">
                                    </div>
                                    <div>
                                        <div class="main-comment" style="font-size: 0.9rem;">
                                            <h6>Nama Orang</h6>
                                            <p style="margin-bottom: 0.5rem;">
                                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                                nemo
                                                odit
                                                rem. Ea velit
                                                laboriosam tenetur optio quas facere ipsam!
                                            </p>
                                        </div>
                                        <div class="d-flex">
                                            <a href="#" class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small class="text-muted me-1">Reply</small></a>
                                            <p style="margin-bottom: 0;"><small class="text-muted">Last updated 3 mins
                                                    ago</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="#" class="text-secondary me-2"><small class="text-muted me-1">Sembunyikan
                                    balasan</small></a>
                            <div class="d-flex">
                                <a href="#" class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small class="text-muted me-1">Reply</small></a>
                                <p><small class="text-muted me-3">Last updated 3 mins ago</small></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
    </div>
</div>
</div>