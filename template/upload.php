<div class="d-flex justify-content-center mt-4">
    <!-- Button trigger modal -->
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
                            <label for="">Kategori</label>
                            <select class="form-select" name="kategori" aria-label="Default select example">
                                <option selected>Pilih Kategori</option>
                                <option value="1">Bootcamp</option>
                                <option value="2">Lomba</option>
                                <option value="3">Seminar</option>
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