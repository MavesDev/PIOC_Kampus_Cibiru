<?php
session_start();

if(!isset($_SESSION['admin'])){
    header("Location:login.php");

    exit();
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelola User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
  <link rel="stylesheet" href="css/styles.css">

</head>

<body>
  <div class="grid-container">

    <header class="header">
      <div class="menu-icon" onclick="openSidebar()">
        <span class="material-icons-outlined">menu</span>
      </div>
    </header>

    <aside id="sidebar">
      <div class="sidebar-title">
        <div class="sidebar-brand">
          <span class="material-icons-outlined">inventory</span> Pusat Informasi & Organisasi Cibiru
        </div>
        <span class="material-icons-outlined" onclick="closeSidebar()">close</span>
      </div>

      <ul class="sidebar-list">
        <a href="dashboard.php" style="text-decoration-line: none; color:#9799ab ">
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">dashboard</span> Dashboard
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

    <main class="main-container">

      <div class="card">
        <h5>Data Postingan User</h5>
        <div class="table-responsive text-nowrap">
          <table class="table">
            <thead>
              <tr>
                <th>No</th>
                <th>ID_User</th>
                <th>Nama_User</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gambar</th>
                <th>Bio</th>
                <th>Role</th>
              </tr>
            </thead>

            <tbody class="table-border-bottom-0">
              <?php
              include "koneksi.php";
              $row = mysqli_query($koneksi, "SELECT * FROM user");
              $no = 1;
              while ($data = mysqli_fetch_array($row)) {
              ?>

                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $data['id_user'] ?></td>
                  <td><?= $data['nama_user'] ?></td>
                  <td><?= $data['email'] ?></td>
                  <td><?= $data['password'] ?></td>
                  <td><?= $data['gambar'] ?></td>
                  <td><?= $data['bio'] ?></td>
                  <td><?= $data['role'] ?></td>
                  <td>
                    <form action="hapus_user.php" method="get" onsubmit="return confirm('Yakin ingin delete?');">
                      <input type="hidden" name="number" value="<?= $data['id_user'] ?>">
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                  </td>
                <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
      </tbody>
      </table>
  </div>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
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