<?php
include "php/code.php";
include 'php/connection.php';
$keyword = $_GET["keyword"];

if (isset($_SESSION["id_user"])) {
    header("Location: post.php");
    exit;
}
?>
<!DOCTYPE html>
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
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Pusat Informasi Kampus Cibiru</h3>
                        <p class="text-muted f-17 mt-3">Jendela Informasi Terdepan Kampus Cibiru yang selalu
                            <i><b>up-to-date</b></i> di genggaman Anda! <br>Dapatkan Semua Informasi dengan Mudah
                            Melalui
                            Website yang user-friendly!
                        </p>
                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>


            <div class="row mt-5 pt-4">
                <div style="display: flex; justify-content: space-between; align-items: center; gap: 20px;">
                    <div style="margin-top: 17px;" class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Ketikan Kata Kunci..."
                            aria-label="Recipient's username" aria-describedby="basic-addon2" id="keyword">
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Filter
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?order=desc">Terbaru</a></li>
                            <li><a class="dropdown-item" href="?order=asc">Terlama</a></li>
                        </ul>
                    </div>
                </div>

                <div class="row" id="container-post">
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

                    <div class="col-lg-4" id="container-post">
                        <div class="services-box p-4 mt-4" max-height="500px">
                            <a href=" detail-nonuser.php?id_post=<?= $data['id_postingan'] ?>">
                                <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block"
                                    alt="random-image" style="max-height: 200px; max-width: 360px;">
                            </a>
                            <div class="d-flex justify-content-between">
                                <a href=" detail-nonuser.php?id_post=<?= $data['id_postingan'] ?>">
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
                                <p style="height: 86px;" class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
                            </div>
                            <?php $idPost = $data['id_postingan'] ?>
                            <div class="mt-3 d-flex justify-content-between">
                                <div>
                                    <a href="registrasi.php" class="text-primary f-4" class="btn btn-primary"
                                        name="like">
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
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
            <nav aria-label="Page navigation example" class="mt-5">
                <ul class="pagination pagination-costum justify-content-center">
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