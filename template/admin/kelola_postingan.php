    <?php
    include "php/connection.php";
    $row = mysqli_query($conn, "SELECT * FROM postingan WHERE status = '0'");
    $no = 1;
?>

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
                        include "php/connection.php";
                        $row = mysqli_query($conn, "SELECT * FROM postingan WHERE status='Approved'");
                        $no = 1;
                        while ($data = mysqli_fetch_array($row)) {
                    ?>

                    <tr>
                        <th scope="row"><?= $no++ ?></th>
                        <td><?= $data['id_postingan'] ?></td>
                        <td><?= $data['nama_kegiatan'] ?></td>
                        <td><img src="./imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt=""
                                srcset=""></td>
                        <td><?= $data['deskripsi'] ?></td>
                        <td><?= $data['status'] ?></td>
                        <td><?= $data['waktu_posting'] ?></td>
                        <td><?= $data['id_kategori'] ?></td>
                        <td><?= $data['id_user'] ?></td>
                        <td><?= $data['jenis_postingan'] ?></td>
                        <td><?= $data['harga'] ?></td>
                        <td><?= $data['suka'] ?></td>
                        <td>
                            <form action="hapus_post.php" method="get"
                                onsubmit="return confirm('Yakin ingin delete?');">
                                <input type="hidden" name="number" value="<?= $data['id_postingan'] ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <?php } ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>