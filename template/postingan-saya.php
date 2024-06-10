<section class="section bg-services">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-4">
                <div class="profile-card text-center p-3 mb-2">
                    <?php
                    include './php/connection.php';
                    $id_user = $_SESSION['id_user'];
                    $fetch_image_query = "SELECT gambar FROM user WHERE id_user = '$id_user'";
                    $fetch_image_query_run = mysqli_query($conn, $fetch_image_query);
                    ?>
                    <?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
                        <?php foreach ($fetch_image_query_run as $data) : ?>
                            <img style="width: 5rem;" class="rounded-circle img-fluid" src="imgProfile/<?= $data['gambar']; ?>"" alt=" Profile Picture">
                            <div>
                                <h4 class="mt-3"><?= $_SESSION['nama_user'] ?></h4>
                                <p><?= $_SESSION['bio'] ?></p>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
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
                    <a class="text-dark rounded-3 p-3 mb-2 bg-body-secondary" href="profile.php">Edit Profile</a>
                    <a class="text-dark p-3 mb-2 bg-body-secondary" href="postinganSaya.php">Postingan Saya</a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="sidebar">
                    <h4>Postingan Saya</h4>
                    <div class="alert bg-success-subtle" role="alert">
                        Postingan yang sudah ada unggah muncul disini.
                    </div>
                    <div class="row pt-4" id="container-post">
                        <?php
                        include './php/connection.php';
                        $id_user = $_SESSION['id_user'];

                        $fetch_image_query = "SELECT * FROM postingan WHERE id_user = '$id_user'";
                        $fetch_image_query_run = mysqli_query($conn, $fetch_image_query);

                        ?>
                        <?php if (mysqli_num_rows($fetch_image_query_run) > 0) : ?>
                            <?php foreach ($fetch_image_query_run as $data) : ?>
                                <div class="col-lg-4" id="container-post">
                                    <div class="services-box p-4 mt-4" max-height="500px">
                                        <a href="#">
                                            <img src="imgUpload/<?= $data['gambar']; ?>" class="img-thumbnail mx-auto d-block" alt="random-image" style="max-height: 200px; max-width: 200px;">
                                        </a>
                                        <div class="d-flex justify-content-between">
                                            <a href="#">
                                                <h5 class="mt-4 text-primary"><?= $data['nama_kegiatan']; ?>
                                                </h5>
                                            </a>
                                        </div>
                                        <div class="post-costum">
                                            <p class="text-muted mt-3"><?= $data['deskripsi']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>