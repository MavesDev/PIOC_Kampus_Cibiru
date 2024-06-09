<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="index.php">
            <img src="images/logo-dark.png" alt="" height="22">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                <div class="nf-area">
                    <button type="button" class="btn btn-primary position-relative p-2" id="nf-btn">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"
                            id="numHead">
                            99+
                            <!-- <span class="visually">unread messages</span> -->
                        </span>
                    </button>
                    <div class="rounded me-5" style="position: absolute; z-index: 9999; margin-left: -10rem">
                        <div class="nf-message border-success mt-3 shadow p-3 mb-5 bg-body-tertiary rounded w-100 p-3"
                            id="notifications" style="max-height: 40em; overflow-y: auto;"><b>Nothing</b></div>
                    </div>
                </div>
            </ul>

            <ul class="navbar-nav navbar-center">
                <li class="nav-item">
                    <a href="login.php" class="nav-link">Log In</a>
                </li>
                <li class="nav-item d-inline-block d-lg-none">
                    <a href="" class="nav-link">Sign Up</a>
                </li>
            </ul>
            <div class="navbar-button d-none d-lg-inline-block">
                <a href="" class="btn btn-sm btn-soft-primary btn-round">Sign Up</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->