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
                        <!-- <div class="services-icon bg-soft-primary">
                        <i class="mdi mdi-google text-primary"></i>
                        </div> -->

                        <h5 class="mt-4">Bagikan Informasi dengan Mudah</h5>
                        <p class="text-muted mt-3">Dengan fitur unggah postingan kami, Anda dapat dengan mudah membagikan artikel, berita, atau panduan terbaru Anda.
                             Cukup unggah konten Anda, dan biarkan dunia mengetahuinya!.</p>

                        <!-- <div class="mt-3">
                            <a href="" class="text-primary f-16">Learn More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div> -->

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-box p-4 mt-4">
                        <!-- <div class="services-icon bg-soft-primary">
                            <i class="mdi mdi-instagram text-primary"></i>
                        </div> -->

                        <h5 class="mt-4">Temukan Informasi Seketika</h5>
                        <p class="text-muted mt-3">Jangan buang waktu mencari informasi. Dengan pencarian real-time kami, 
                            dapatkan hasil yang akurat dan cepat sesuai kebutuhan Anda hanya dalam hitungan detik.</p>

                        <!-- <div class="mt-3">
                            <a href="" class="text-primary f-16">Learn More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div> -->

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-box p-4 mt-4">
                        <!-- <div class="services-icon bg-soft-primary">
                            <i class="mdi mdi-youtube text-primary"></i>
                        </div> -->

                        <h5 class="mt-4">Interaksi Langsung dengan Pembaca</h5>
                        <p class="text-muted mt-3">Fitur komentar real-time kami memungkinkan Anda dan pembaca berinteraksi langsung. Dapatkan feedback, 
                            jawab pertanyaan, dan bangun komunitas yang lebih erat secara instan..</p>

                        <!-- <div class="mt-3">
                            <a href="" class="text-primary f-16">Learn More <i class="mdi mdi-arrow-right ms-1"></i></a>
                        </div> -->

                    </div>
                </div>
            </div>

<!-- 
            <div class="row align-items-center mt-5 pt-4" id="counter">
                <div class="col-lg-6">
                    <div class="pr-4 mt-4">
                        <p class="text-uppercase">why choose us </p>
                        <h3>Boots Your Website Thamza!</h3>

                        <p class="text-muted mt-3">Morbi at erat et tortor tempor sodales non eu lacus Donec at gravida
                            nunc vitae volutpat libero fusce sit amet mi quis ipsum tempus
                            gravida in quis felis Aliquam fringilla tempus scelerisque Phasellus viverra tincidunt
                            suscipit. Praesent non arcu vitae augue
                            aliquam eget vitae Pellentesque sem mauris porta eget ultrices eros.</p>

                        <div class="mt-4 pt-1">
                            <a href="" class="btn btn-outline-primary">Discover More</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5 offset-lg-1">
                    <div class="counter-box">
                        <div class="mt-4">

                            <div class="media">
                                <div class="count-box bg-soft-primary text-center">
                                    <h3 class="counter-count mb-1 text-primary"> <span class="counter-value"
                                            data-count="49">25</span>
                                        <span class="count-plus text-primary"> +</span></h3>
                                    <p class="text-uppercase text-muted mb-0 f-14">Employees </p>
                                </div>
                                <div class="media-body pl-4">

                                    <p class="text-muted mb-0 mt-3">Aliquam egestas vehicula sapien cibus sit amet
                                        rutrum dolor molestie.</p>

                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3">

                            <div class="media">
                                <div class="count-box bg-soft-primary text-center">
                                    <h3 class="counter-count mb-1 text-primary"> <span class="counter-value"
                                            data-count="76">25</span>
                                        <span class="count-plus text-primary"> +</span></h3>
                                    <p class="text-uppercase text-muted mb-0 f-14">Projects </p>
                                </div>
                                <div class="media-body pl-4">

                                    <p class="text-muted mb-0 mt-3">Pellentesque habitant morbi malesuada fames ac
                                        turpis egestas.</p>

                                </div>
                            </div>
                        </div>

                        <div class="mt-4 pt-3">

                            <div class="media">
                                <div class="count-box bg-soft-primary text-center">
                                    <h3 class="counter-count mb-1 text-primary"> <span class="counter-value"
                                            data-count="99">25</span>
                                        <span class="count-plus text-primary"> +</span></h3>
                                    <p class="text-uppercase text-muted mb-0 f-14">clients </p>
                                </div>
                                <div class="media-body pl-4">

                                    <p class="text-muted mb-0 mt-3"> Suspendisse congue risus consequat sapien potitor
                                        risus tincidunt.</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    END SERVICES -->

    <!-- START FEATURES -->
    <!-- <section class="section bg-light bg-features">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="mt-4 home-img">
                        <div class="animation-2"></div>
                        <div class="animation-3"></div>
                        <img src="images/features/img-1.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6 offset-lg-1">
                    <div class="mt-4">
                        <h2>Team Collaboration in real time</h2>
                        <p class="mt-4 text-muted">Praesent ut tincidunt massa vel facilisis dui Integer mattis quis
                            augue in rhoncus Integer mattis enim vel eros bibendum egestas id laoreet nisi
                            Praesent malesuada eros at bibendum eleifend Nam nec urna hendrerit interdum risus
                            Donec faucibus quis magna sit amet laoreet Maecenas finibus semper massa in finibus est
                            venenatis quis.</p>

                        <div class="mt-4">
                            <a href="" class="btn btn-primary">Explore More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END FEATURES -->

    <!-- START PRICING -->
    <!-- <section class="section" id="pricing">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Best Pricing Package </h3>
                        <p class="text-muted f-17 mt-3">Vivamus ac nulla ultrices laoreet neque mollis mi morbi
                            elementum mauris
                            sit amet arcu <br> fringilla auctor In eleifend maximus nisi sed vulputate.</p>

                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>


            <div class="row mt-5 pt-4">
                <div class="col-lg-4">
                    <div class="pricing-box mt-4">
                        <i class="mdi mdi-account h1"></i>
                        <h4 class="f-20">Starter</h4>

                        <div class="mt-4 pt-2">
                            <p class="mb-2 f-18">Features</p>

                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>Unlimited</b>
                                Target Audience</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>1</b>
                                User Account</p>
                            <p class="mb-2"><i class="mdi mdi-close-circle text-danger f-18 me-2"></i><b>100+</b>
                                Video Tuts</p>
                            <p class="mb-2"><i class="mdi mdi-close-circle text-danger f-18 me-2"></i><b>Public</b>
                                Displays
                            </p>
                        </div>

                        <p class="mt-4 pt-2 text-muted">Semper urna veal tempus pharetra elit habisse platea dictumst.
                        </p>
                        <div class="pricing-plan mt-4 pt-2">
                            <h4 class="text-muted"><s> $9.99</s> <span class="plan ps-3 text-dark">$8.99 </span></h4>
                            <p class="text-muted mb-0">Per Month</p>
                        </div>


                        <div class="mt-4 pt-3">
                            <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box mt-4">
                        <div class="pricing-badge">
                            <span class="badge">Featured</span>
                        </div>

                        <i class="mdi mdi-account-multiple h1 text-primary"></i>
                        <h4 class="f-20 text-primary">Personal</h4>


                        <div class="mt-4 pt-2">
                            <p class="mb-2 f-18">Features</p>

                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>Unlimited</b>
                                Target Audience</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>1</b>
                                User Account</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>100+</b>
                                Video Tuts</p>
                            <p class="mb-2"><i class="mdi mdi-close-circle text-danger f-18 me-2"></i><b>Public</b>
                                Displays
                            </p>
                        </div>

                        <p class="mt-4 pt-2 text-muted">Semper urna veal tempus pharetra elit habisse platea dictumst.
                        </p>

                        <div class="pricing-plan mt-4 pt-2">
                            <h4 class="text-muted"><s> $19.99</s> <span class="plan ps-3 text-dark">$18.99 </span></h4>
                            <p class="text-muted mb-0">Per Month</p>
                        </div>

                        <div class="mt-4 pt-3">
                            <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="pricing-box mt-4">
                        <i class="mdi mdi-account-multiple-plus h1"></i>
                        <h4 class="f-20">Ultimate</h4>


                        <div class="mt-4 pt-2">
                            <p class="mb-2 f-18">Features</p>

                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>Unlimited</b>
                                Target Audience</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>1</b>
                                User Account</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>100+</b>
                                Video Tuts</p>
                            <p class="mb-2"><i
                                    class="mdi mdi-checkbox-marked-circle text-success f-18 me-2"></i><b>Public</b>
                                Displays
                            </p>
                        </div>

                        <p class="mt-4 pt-2 text-muted">Semper urna veal tempus pharetra elit habisse platea dictumst.
                        </p>

                        <div class="pricing-plan mt-4 pt-2">
                            <h4 class="text-muted"><s> $29.99</s> <span class="plan ps-3 text-dark">$28.99 </span></h4>
                            <p class="text-muted mb-0">Per Month</p>
                        </div>

                        <div class="mt-4 pt-3">
                            <a href="" class="btn btn-primary btn-rounded">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END PRICING -->

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

            <!-- <div class="row mt-5 pt-4">
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
            </div> -->
        </div>
    </section>
    <!-- END TEAM -->

    <!-- START CTA -->
    <!-- <section class="section bg-light bg-cta">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="text-center">
                        <h2>Get Started With <span class="text-primary">Thamza</span></h2>
                        <p class="text-muted mt-3">Quisque iaculis urna eu magna semper quis ultrices lectus efficitur
                            Praesent convallis
                            velit urna, vitae tristique tellus feugiat a maecenas diam metus convallis id cursus vel
                            tellus.<br> Curabitur ullamcorper feugiat convallis.</p>

                        <div class="mt-4 pt-2">
                            <a href="" class="btn btn-soft-primary btn-round me-3 btn-rounded">Request a demo</a>
                            <a href="" class="btn btn-primary btn-round btn-rounded">Get Started Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END CTA -->

    <!-- START TESTIMONIAL -->
    <!-- <section class="section" id="clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Clients Loved Products</h3>
                        <p class="text-muted f-17 mt-3">Vivamus ac nulla ultrices laoreet neque mollis mi morbi
                            elementum mauris
                            sit amet arcu <br> fringilla auctor In eleifend maximus nisi sed vulputate.</p>

                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">


                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="client-box mt-4">
                                            <h5 class="line-height_1_6">The European languages are members of the Same
                                                family Their separate existence is a myth For science, music, sport,
                                                etc, europe
                                                convals d feugiat egdgfet cursus tellus their languages common words.
                                            </h5>
                                            <div class="client-icon">
                                                <i class="mdi mdi-format-quote-close"></i>
                                            </div>
                                            <h5 class="f-18">Brandon Carney</h5>
                                            <p class="text-primary mb-0">- Designer</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="text-center mt-4">
                                            <img src="images/testi-img/img-1.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="client-box mt-4">
                                            <h5 class="line-height_1_6">The European languages are members of the Same
                                                family Their separate existence is a myth For science, music, sport,
                                                etc, europe
                                                convals d feugiat egdgfet cursus tellus their languages common words.
                                            </h5>
                                            <div class="client-icon">
                                                <i class="mdi mdi-format-quote-close"></i>
                                            </div>
                                            <h5 class="f-18">Samuel Campbell</h5>
                                            <p class="text-primary mb-0">- Developer</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="text-center mt-4">
                                            <img src="images/testi-img/img-2.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="client-box mt-4">
                                            <h5 class="line-height_1_6">The European languages are members of the Same
                                                family Their separate existence is a myth For science, music, sport,
                                                etc, europe
                                                convals d feugiat egdgfet cursus tellus their languages common words.
                                            </h5>
                                            <div class="client-icon">
                                                <i class="mdi mdi-format-quote-close"></i>
                                            </div>
                                            <h5 class="f-18">Michelle Stehle</h5>
                                            <p class="text-primary mb-0">- Manager</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="text-center mt-4">
                                            <img src="images/testi-img/img-3.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <div class="client-box mt-4">
                                            <h5 class="line-height_1_6">The European languages are members of the Same
                                                family Their separate existence is a myth For science, music, sport,
                                                etc, europe
                                                convals d feugiat egdgfet cursus tellus their languages common words.
                                            </h5>
                                            <div class="client-icon">
                                                <i class="mdi mdi-format-quote-close"></i>
                                            </div>
                                            <h5 class="f-18">Margaret Lampley</h5>
                                            <p class="text-primary mb-0">- CEO</p>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">

                                        <div class="text-center mt-4">
                                            <img src="images/testi-img/img-4.png" class="img-fluid" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <ol class="carousel-indicators">
                            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"><img
                                    src="images/users/img-1.jpg" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block"></li>
                            <li data-bs-target="#carouselExampleIndicators"  data-bs-slide-to="1"><img
                                    src="images/users/img-2.jpg" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block"></li>
                            <li data-bs-target="#carouselExampleIndicators"  data-bs-slide-to="2"><img
                                    src="images/users/img-3.jpg" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block"></li>
                            <li data-bs-target="#carouselExampleIndicators"  data-bs-slide-to="3"><img
                                    src="images/users/img-4.jpg" alt=""
                                    class=" testi-img img-fluid rounded mx-auto d-block"></li>
                        </ol>



                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END TESTIMONIAL -->

    <!-- START CLIENT -->
    <!-- <section class="section bg-light bg-clients">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">All Trusted Brands</h3>
                        <p class="text-muted f-17 mt-3">Vivamus ac nulla ultrices laoreet neque mollis mi morbi
                            elementum mauris
                            sit amet arcu <br> fringilla auctor In eleifend maximus nisi sed vulputate.</p>

                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/1.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/2.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <div class="client-images mt-4">
                        <img src="images/clients/3.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="client-images mt-4">
                        <img src="images/clients/4.png" alt="logo-img" class="mx-auto img-fluid d-block">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- END CLIENT -->

    <!-- START CONTACT -->
    <!-- <section class="section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h3 class="title-heading mt-4">Let's talk about everything!</h3>
                        <p class="text-muted f-17 mt-3">Vivamus ac nulla ultrices laoreet neque mollis mi morbi
                            elementum mauris
                            sit amet arcu <br> fringilla auctor In eleifend maximus nisi sed vulputate.</p>

                        <img src="images/home-border.png" height="15" class="mt-3" alt="">
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-6">
                    <div class="mt-4 home-img text-center">
                        <div class="animation-2"></div>
                        <div class="animation-3"></div>
                        <img src="images/features/img-3.png" class="img-fluid" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="custom-form mt-4">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">First Name</label>
                                        <input name="name" id="name" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Last Name</label>
                                        <input name="name" id="lastname" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Email Address</label>
                                        <input name="email" id="email" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Subject</label>
                                        <input name="subject" id="subject" class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-3">
                                        <label class="contact-lable">Your Message</label>
                                        <textarea name="comments" id="comments" rows="5"
                                            class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12 mt-3 text-end">
                                    <input id="submit" name="send" class="submitBnt btn btn-primary btn-round"
                                        value="Send Message" type="submit">
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </section> -->
    <!-- END CONTACT -->

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
                                    <li><a #href="">Upload postingan</a></li>
                                    <li><a #href="">search real-time</a></li>
                                    <li><a #href="">komentar real-time</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="mt-4">
                                <h5 class="f-20">Developer</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a #href="">Alfeus martinus</a></li>
                                    <li><a #href="">Rafif aiman</a></li>
                                    <li><a #href="">Deyan laudza</a></li>
                                    <li><a #href="">Raqhin kusumadinata</a></li>
                                    <li><a #href="">Ayub putra </a></li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-12">
                    <div class="text-center">
                        <p class="text-muted mb-0"><script>
							document.write(new Date().getFullYear())
						</script> © Pioc</p>
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