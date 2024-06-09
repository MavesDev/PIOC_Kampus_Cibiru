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
              include "php/connection.php";
              $row = mysqli_query($conn, "SELECT * FROM user");
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
                            <form action="hapus_user.php" method="get"
                                onsubmit="return confirm('Yakin ingin delete?');">
                                <input type="hidden" name="number" value="<?= $data['id_user'] ?>">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                        <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>