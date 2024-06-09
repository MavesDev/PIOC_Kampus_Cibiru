<!--Navbar Start-->
<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark nav-sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="navbar-brand logo text-uppercase" href="index.php">
            <img src="images/logo-dark.png" alt="" height="22">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ms-auto navbar-center" id="mySidenav">
                <div class="nf-area">
                    <button type="button" class="btn btn-primary position-relative p-2" id="nf-btn">
                        <i class="bi bi-bell"></i>
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger" id="numHead">
                            99+
                            <!-- <span class="visually">unread messages</span> -->
                        </span>
                    </button>
                    <div class="nf-message" id="notifications">Nothing</div>
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
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with Bookmark</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>
    <nav class="navbar">
        <!-- Navbar content -->
        <ul class="navbar-nav">
            <!-- Other navbar items -->
            <li class="nav-item">
                <a class="nav-link" href="bookmarks.php">
                    <i class="fas fa-bookmark"></i> Bookmarks
                </a>
            </li>
        </ul>
    </nav>
</body>
</html>

</nav>
<!-- Navbar End -->