<section class="section bg-services">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-card text-center p-3 mb-2">
                    <?php 
                        include './php/connection.php';
                        $id_user = $_SESSION['id_user'];
                        $fetch_image_query = "SELECT * FROM user WHERE id_user = '$id_user'";
                        $fetch_image_query_run = mysqli_query($conn, $fetch_image_query);
                    ?>
                    <?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
                    <?php foreach ($fetch_image_query_run as $data) : ?>
                    <img style="width: 5rem;" class="rounded-circle img-fluid" src="imgProfile/<?= $data['gambar']; ?>"" alt="Profile Picture">
                    <div>
                        <h4 class="mt-3"><?= $data['nama_user'] ?></h4>
                        <p><?= $data['bio'] ?></p>
                    </div>

                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Edit Foto
                    </button>
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Foto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="php/update_profile.php" method="POST" enctype="multipart/form-data" id="myform">
                                        <div class="form-group mb-3">
                                            <label for="">Unggah Foto</label>
                                            <input type="file" class="form-control" name="gambar" id="inputGroupFile02">
                                            <div class="image-preview">
                                                <img id="preview-img" class="img-fluid mt-3">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" form="myform" name="save_data" class="btn btn-primary">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column profile-card text-center p-3 mb-2  rounded-3">
                    <a class="text-dark rounded-3 p-3 mb-2 bg-body-secondary" href="#">Edit Profile</a>
                    <a class="text-dark p-3 mb-2 bg-body-secondary" href="postinganSaya.php">Postingan Saya</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="sidebar">
                    <h4>Lihat/Edit Profil</h4>
                    <div class="alert bg-success-subtle" role="alert">
                        Silahkan edit profile anda secara berkala.
                    </div>
                    <form action="php/update_profile.php" method="POST">
                        <div class="mb-3">
                            <label for='new_nama_user'>Nama Lengkap</label>
                            <input type='text' class='form-control' id='new_nama_user' name='new_nama_user' placeholder="<?= $data['nama_user'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for='new_email'>Email</label>
                            <input type='email' class='form-control' id='new_email' name='new_email' placeholder="<?= $data['email'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for="disabledTextInput" class="form-label">Password</label>
                            <input type="password" id='new_pass' name='new_pass' class="form-control" placeholder="<?= $data['password'] ?>">
                        </div>
                        <div class="mb-3">
                            <label for='new_bio'>Bio</label>
                            <textarea class="form-control" id='new_bio' name='new_bio' placeholder="<?= $data['bio'] ?>" id="floatingTextarea"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            Update Data
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    <?php endif; ?>
</section>