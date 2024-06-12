<?php
include "php/code.php";

if (!isset($_SESSION['admin'])) {
  header("Location:login.php");

  exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title><?= $title ?></title>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>

<body>
    <style>
    .btn-group {
        display: flex;
        gap: 10px;
    }
    </style>

    <div class="grid-container">

        <!-- Header -->
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <span class="material-icons-outlined">menu</span>
            </div>
        </header>

        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <span class="material-icons-outlined">inventory</span> Pusat Informasi & Organisasi Cibiru
                </div>
                <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
            </div>

            <ul class="sidebar-list">
                <a href="dashboard.php" style="text-decoration-line: none; color:#9799ab ">
                    <li class="sidebar-list-item d-flex align-items-center justify-content-between">
                        <div>
                            <span class="material-icons-outlined">dashboard</span> Dashboard
                        </div>
                        <?php
                            $data_user = $_SESSION["id_user"];
                            $mark_notif = query("SELECT * FROM `postingan` WHERE status = '0'");
                        ?>

                        <?php if (!empty($mark_notif)) : ?>
                        <span class="badge rounded-pill bg-danger" id="numHead"> ! </span>
                        <?php endif; ?>
                    </li>
                </a>

                <a href="kelola_postingan.php" style="text-decoration-line: none; color:#9799ab ">
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">display_settings</span> Kelola Postingan
                    </li>
                </a>

                <a href="kelola_user.php" style="text-decoration-line: none; color:#9799ab ">
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">manage_accounts</span> Kelola User
                    </li>
                </a>

                <a href="logout.php" style="text-decoration-line: none; color:#9799ab ">
                    <li class="sidebar-list-item">
                        <span class="material-icons-outlined">logout</span> Logout
                    </li>
                </a>

            </ul>
        </aside>

        <!-- Main -->
        <main class="main-container">
            <?php echo $content; ?>
        </main>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.3/apexcharts.min.js"></script>
    <script src="js/scripts.js"></script>
    <script>
    // SIDEBAR TOGGLE

    let sidebarOpen = false;
    const sidebar = document.getElementById('sidebar');

    function openSidebar() {
        if (!sidebarOpen) {
            sidebar.classList.add('sidebar-responsive');
            sidebarOpen = true;
        }
    }

    function closeSidebar() {
        if (sidebarOpen) {
            sidebar.classList.remove('sidebar-responsive');
            sidebarOpen = false;
        }
    }
    </script>
</body>

</html>