<?php
include "koneksi.php";
$row = mysqli_query($koneksi, "SELECT * FROM postingan WHERE status = '0'");
$no = 1;
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

        <a href="" style="text-decoration-line: none; color:#9799ab ">
          <li class="sidebar-list-item">
            <span class="material-icons-outlined">logout</span> Logout
          </li>
        </a>

      </ul>
    </aside>

    <main class="main-container">
      <div class="card">
        <h5>Data Postingan User</h5>
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">ID_Postingan</th>
                <th scope="col">Nama_Kegiatan</th>
                <th scope="col">Gambar</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Status</th>
                <th scope="col">Waktu_Postingan</th>
                <th scope="col">ID_Kategori</th>
                <th scope="col">ID_User</th>
                <th scope="col">Jenis_Postingan</th>
                <th scope="col">Harga</th>
                <th scope="col">Suka</th>
              </tr>
            </thead>

            <tbody class="table-border-bottom-0">
              <?php
              include "koneksi.php";
              $row = mysqli_query($koneksi, "SELECT * FROM postingan WHERE status='Approved'");
              $no = 1;
              while ($data = mysqli_fetch_array($row)) {
              ?>

                <tr>
                  <th scope="row"><?= $no++ ?></th>
                  <td><?= $data['id_postingan'] ?></td>
                  <td><?= $data['nama_kegiatan'] ?></td>
                  <td><img src="./imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="" srcset=""></td>
                  <td><?= $data['deskripsi'] ?></td>
                  <td><?= $data['status'] ?></td>
                  <td><?= $data['waktu_posting'] ?></td>
                  <td><?= $data['id_kategori'] ?></td>
                  <td><?= $data['id_user'] ?></td>
                  <td><?= $data['jenis_postingan'] ?></td>
                  <td><?= $data['harga'] ?></td>
                  <td><?= $data['suka'] ?></td>
                  <td>
                    <form action="hapus_post.php" method="get" onsubmit="return confirm('Yakin ingin delete?');">
                      <input type="hidden" name="number" value="<?= $data['id_postingan'] ?>">
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