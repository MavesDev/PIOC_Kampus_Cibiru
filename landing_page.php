<?php
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

</head>

<body data-spy="scroll" data-bs-target="#navbarCollapse">

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo text-uppercase" href="landing_page.php">
                <img src="images/logopioc.png" alt="" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- Navbar End -->

    <!-- END HOME -->
    <section class="bg-home bg-light" id="home">
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="home-content">
                                <p class="mb-0">Digital informasi</p>
                                <img src="images/home-border.png" height="15" alt="">
                                <h1 class="home-title mt-4">Selamat Datang di Pusat Informasi Anda</h1>
                                <p class="text-muted mt-4 f-20">Temukan informasi terkini, panduan bermanfaat, dan sumber daya terpercaya hanya dengan satu klik</p>
                                <div class="mt-4 pt-2">
                                    <a href="postingan-nonuser.php" class="btn btn-primary me-3">Lihat informasi</a>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="home-img">

                                <div class="animation-1"></div>
                                <div class="animation-2"></div>
                                <div class="animation-3"></div>


                                <img src="images/features/img-2.png" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <!-- START SERVICES -->
    <section class="section bg-services" id="services">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Apa yang Kami Tawarkan</h3>
                        <p class="text-muted f-17 mt-3">Dari berita terkini hingga panduan mendetail,<br>layanan kami dirancang untuk memenuhi semua kebutuhan informasi Anda.</p>


                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="services-box p-4 mt-4">

                        <h5 class="mt-4">Bagikan Informasi dengan Mudah</h5>
                        <p class="text-muted mt-3">Dengan fitur unggah postingan kami, Anda dapat dengan mudah membagikan artikel, berita, atau panduan terbaru Anda.
                            Cukup unggah konten Anda, dan biarkan dunia mengetahuinya!.</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-box p-4 mt-4">
                        <h5 class="mt-4">Temukan Informasi Seketika</h5>
                        <p class="text-muted mt-3">Jangan buang waktu mencari informasi. Dengan pencarian real-time kami,
                            dapatkan hasil yang akurat dan cepat sesuai kebutuhan Anda hanya dalam hitungan detik.</p>


                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-box p-4 mt-4">

                        <h5 class="mt-4">Interaksi Langsung dengan Pembaca</h5>
                        <p class="text-muted mt-3">Fitur komentar real-time kami memungkinkan Anda dan pembaca berinteraksi langsung. Dapatkan feedback,
                            jawab pertanyaan, dan bangun komunitas yang lebih erat secara instan..</p>

                    </div>
                </div>
            </div>

            <!-- START TEAM -->
            <section class="section pt-0" id="team">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="title-box text-center">
                                <h3 class="title-heading mt-4"> Kenali Tim Developer Kami </h3>
                                <p class="text-muted f-17 mt-3"> Kami adalah tim developer berdedikasi yang mengkhususkan diri dalam menciptakan solusi teknologi inovatif. Dengan keahlian di berbagai bidang pengembangan perangkat lunak,
                                    kami berkomitmen memberikan yang terbaik dalam setiap proyek. <br>

                                    <img src="images/home-border.png" height="15" class="mt-3" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="row mt-5 pt-4">
                        <div class="col-lg-12">
                            <div class="team-carousel">
                                <div class="team-box p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="mt-2">Alfeus Martinus</h5>
                                                <p class="team-badge bg-primary text-white rounded f-14 mt-2">#Alfeus</p>
                                                <p class="text-muted mt-3">Anterdum maleada fames Integer molestie ante primis
                                                    nulla facibus felis ulputate platea elit.</p>

                                                <div class="team-social mt-4 pt-2">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <img src="images/users/Gradient-min.png" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="team-box p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="mt-2">Rafif Aiman</h5>
                                                <p class="team-badge bg-primary text-white rounded f-14 mt-2"># Rafif</p>
                                                <p class="text-muted mt-3">Anterdum maleada fames Integer molestie ante primis
                                                    nulla facibus felis ulputate platea elit.</p>

                                                <div class="team-social mt-4 pt-2">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <img src="images/users/rafif.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="team-box p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="mt-2">Deyan Laudza</h5>
                                                <p class="team-badge bg-primary text-white rounded f-14 mt-2">#Deyan</p>
                                                <p class="text-muted mt-3">Anterdum maleada fames Integer molestie ante primis
                                                    nulla facibus felis ulputate platea elit.</p>

                                                <div class="team-social mt-4 pt-2">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <img src="images/users/deyan.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="team-box p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="mt-2">Raqhin Kusumadinata </h5>
                                                <p class="team-badge bg-primary text-white rounded f-14 mt-2">#Raqhin</p>
                                                <p class="text-muted mt-3">Anterdum maleada fames Integer molestie ante primis
                                                    nulla facibus felis ulputate platea elit.</p>

                                                <div class="team-social mt-4 pt-2">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <img src="images/users/raqhin.jpeg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="team-box p-3">
                                    <div class="row align-items-center">
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <h5 class="mt-2">Ayub Putra Ferdian </h5>
                                                <p class="team-badge bg-primary text-white rounded f-14 mt-2">#Ayub</p>
                                                <p class="text-muted mt-3">'ayooob.'</p>

                                                <div class="team-social mt-4 pt-2">
                                                    <ul class="list-inline mb-0">
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mt-4">
                                                <img src="images/users/ayub.jpg" alt="" class="img-fluid rounded">
                                            </div>
                                        </div>
                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END TEAM -->

            <!-- START FOOTER -->
            <section class="section bg-light bg-footer pb-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-info mt-4">
                                <img src="images/logopioc.png" alt="" height="60">
                                <p class="text-muted mt-4 mb-2">Jendela Informasi Terdepan Kampus Cibiru yang selalu up-to-date di genggaman Anda!
                                    Dapatkan Semua Informasi dengan Mudah Melalui Website yang user-friendly!</p>
                                <div class="team-social mt-4 pt-2">
                                    <ul class="list-inline mb-0">
                                        <li class="list-inline-item">
                                            <a href="" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-reset"><i class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="row  ps-0 md-lg-5">
                                <div class="col-lg-6">
                                    <div class="mt-4">
                                        <h5 class="f-20">Services</h5>
                                        <ul class="list-unstyled footer-link mt-3">
                                            <li><a #href="">Upload Postingan</a></li>
                                            <li><a #href="">search Real-time</a></li>
                                            <li><a #href="">komentar Real-time</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="mt-4">
                                        <h5 class="f-20">Developer</h5>
                                        <ul class="list-unstyled footer-link mt-3">
                                            <li><a #href="">Alfeus Martinus</a></li>
                                            <li><a #href="">Rafif Aiman</a></li>
                                            <li><a #href="">Deyan Laudza</a></li>
                                            <li><a #href="">Raqhin Kusumadinata</a></li>
                                            <li><a #href="">Ayub Putra </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="f-20">Kritik & Saran</h5>

                                <div class="subscribe mt-4 pt-1">
                                    <form action="#">
                                        <input placeholder="Masukan Pesan Anda.." type="text">
                                        <button type="submit" class="btn btn-primary"><i class="mdi mdi-send"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                    <hr class="my-5">

                    <div class="row">
                        <div class="col-12">
                            <div class="text-center">
                                <p class="text-muted mb-0">
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script> © Pioc
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </section>
            <!-- END FOOTER -->

            <!-- javascript -->
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