<!-- Main -->
<main class="main-container">
    <div class="main-title">
        <p class="font-weight-bold">DASHBOARD</p>
    </div>

    <div class="main-cards">
        <a href="dashboard.php" style="text-decoration: none; color:#9799AB">
            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">PENDING POST</p>
                    <span class="material-icons-outlined text-blue">post_add</span>
                </div>
                <span class="text-primary font-weight-bold">
                    <?php
                        include "php/connection.php";
                        $result = mysqli_query($conn, "SELECT COUNT(*) AS pending_count FROM postingan WHERE status='0'");
                        $row = mysqli_fetch_assoc($result);
                        echo $row['pending_count'];
                    ?>
                </span>
            </div>
        </a>

        <a href="kelola_user.php" style="text-decoration: none; color:#9799AB">
            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">TOTAL USER</p>
                    <span class="material-icons-outlined text-orange">person</span>
                </div>
                <span class="text-primary font-weight-bold">
                    <?php
                        include "php/connection.php";
                        $result = mysqli_query($conn, "SELECT COUNT(*) AS user_count FROM user WHERE role='user'");
                        $row = mysqli_fetch_assoc($result);
                        echo $row['user_count'];
                    ?>
                </span>
            </div>
        </a>

        <a href="kelola_postingan.php" style="text-decoration: none; color:#9799AB">
            <div class="card">
                <div class="card-inner">
                    <p class="text-primary">USER POST</p>
                    <span class="material-icons-outlined text-green">account_box</span>
                </div>
                <span class="text-primary font-weight-bold">
                    <?php
                        include "php/connection.php";
                        $result = mysqli_query($conn, "SELECT COUNT(*) AS approved_count FROM postingan WHERE status='approved'");
                        $row = mysqli_fetch_assoc($result);
                        echo $row['approved_count'];
                    ?>
                </span>
            </div>
        </a>

    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Deskripsi</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                        include "php/connection.php";
                        $row = mysqli_query($conn, "SELECT * FROM postingan WHERE status='0'");
                        $no = 1;
                        while ($data = mysqli_fetch_array($row)) { 
                    ?>
                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $data['nama_kegiatan'] ?></td>
                        <td><?= $data['gambar'] ?></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td>
                            <div class="btn-group">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#rejectModal<?= $data['id_postingan'] ?>">
                                    Tolak Postingan
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="rejectModal<?= $data['id_postingan'] ?>" tabindex="-1"
                                    aria-labelledby="rejectModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <form action="reject_post.php" method="post">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="rejectModalLabel">Form
                                                        Input Alasan</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <input type="hidden" name="id_postingan"
                                                        value="<?= $data['id_postingan'] ?>">
                                                    <input type="text" class="form-control" name="alasan"
                                                        placeholder="Alasan menolak postingan" required>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Send</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <form action="acc.php" method="get"
                                    onsubmit="return confirm('Yakin ingin mengizinkan postingan?');">
                                    <input type="hidden" name="id_user" value="<?= $data['id_user'] ?>">
                                    <input type="hidden" name="number" value="<?= $data['id_postingan'] ?>">
                                    <button type="submit" class="btn btn-success">Terima Postingan</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

</main>