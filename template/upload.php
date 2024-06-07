<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Postingan</title>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="d-flex justify-content-center mt-4">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Postingan
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Postingan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="../pioc_kampus_cibiru/php/code.php" method="POST" enctype="multipart/form-data" id="myform">
                            <?php
                            include "php/connection.php"; 

                            $queryKategori = mysqli_query($connection, "SELECT id_kategori, nama_kategori FROM kategori");
                            if (!$queryKategori) {
                                die("Query gagal dijalankan: " . mysqli_error($connection));
                            }
                            ?>

                            <div class="form-group mb-3">
                                <label for="">Upload</label>
                                <input type="file" class="form-control" name="gambar" id="inputGroupFile02">
                                <div class="image-preview">
                                    <img id="preview-img" class="img-fluid mt-3">
                                </div>
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Judul</label>
                                <input type="text" class="form-control" name="judul" placeholder="Judul Postingan">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Deskripsi</label>
                                <textarea class="form-control" name="deskripsi" placeholder="Deskripsi Postingan"
                                    id="floatingTextarea"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="id_kategori">Kategori</label>
                                <select class="form-select" id="kategori" name="kategori" aria-label="Default select example">
                                    <?php while ($row = mysqli_fetch_assoc($queryKategori)) : ?>
                                        <option value="<?php echo $row['id_kategori']; ?>">
                                            <?php echo $row['nama_kategori']; ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                                
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
