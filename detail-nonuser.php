<?php

include "php/code.php";

$data = $_GET["id_post"];

?>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Landing Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesdesign" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- flexslider slider -->
    <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
    <!--Slider-->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.theme.css" />
    <link rel="stylesheet" type="text/css" href="css/owl.transitions.css" />
    <!-- magnific pop-up -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style_costum.css" rel="stylesheet" type="text/css" />

    <style>
    .pagination-costum .page-link {
        color: #1ea59a !important;
        /* Ubah warna teks */
    }

    .pagination-costum .page-link:hover {
        color: #14857c !important;
        /* Ubah warna teks saat hover */
        background-color: #e9ecef;
        /* Ubah warna background saat hover */
    }

    .pagination-costum .page-link.active {
        background-color: #1ea59a !important;
        /* Ubah warna background item aktif */
        border-color: #1ea59a !important;
        /* Ubah warna border item aktif */
        color: white !important;
        /* Ubah warna teks item aktif */
    }

    .pagination-costum .page-item.disabled .page-link {
        color: #6c757d;
        /* Ubah warna teks item tidak aktif */
    }
    </style>

</head>

<body data-spy="scroll" data-bs-target="#navbarCollapse">

    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-sticky">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="landing_page.php">
                <img src="images/logopioc.png" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">Log In</a>
                    </li>
                    <li class="nav-item d-inline-block d-lg-none">
                        <a href="registrasi.php" class="nav-link">Sign Up</a>
                    </li>
                </ul>
                <div class="navbar-button d-none d-lg-inline-block">
                    <a href="registrasi.php" class="btn btn-sm btn-soft-primary btn-round">Sign Up</a>
                </div>
            </div>
        </div>
    </nav>



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
                <a href="registrasi.php" class="text-primary f-2" class="btn btn-primary" name="like">
                    <i class="mdi mdi-heart"></i>
                    <?php $result = query("SELECT COUNT(id_suka) AS jumlahLike FROM `suka` WHERE id_postingan = $idPost"); ?>
                    <small><?= $result[0]["jumlahLike"] ?></small>
                </a>
                <a href="registrasi.php" class="text-primary f-2" class="btn btn-primary">
                    <i class="mdi mdi-comment ms-2"></i>
                    <?php $result = query("SELECT COUNT(id_komentar) AS jumlahKomentar FROM `komentar` WHERE id_postingan = $idPost"); ?>
                    <small><?= $result[0]["jumlahKomentar"] ?></small>
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- javascript -->
    <script src="js/script.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.mb.YTPlayer.js"></script>
    <!--flex slider plugin-->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- Portfolio -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <!-- contact init -->
    <script src="js/contact.init.js"></script>
    <!-- counter init -->
    <script src="js/counter.init.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/app.js"></script>

</body>

</html>