<?php
include "php/code.php";

$_POST["id_user"] = $_SESSION["id"];

if( isset($_POST["addComment"]) ) {
    if(add($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
} else if (isset($_POST["addReply"]) ) {
    if(addReply($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
}

$data_postingan = $_GET['id_post'];
$results = query("SELECT * FROM `komentar` WHERE id_postingan = $data_postingan");


?>

<section class="section bg-services" id="services">
    <div class="container">
        <?php foreach ($results as $data) : ?>
        <?php
             $id = $data["id_user"];
             $dataUser = query("SELECT nama_user AS NamaUser FROM user WHERE id_user = $id");     
        ?>
        <div class="d-flex align-middle mb-3" style="width: 100%;">
            <div class="img-comment me-3">
                <img src="https://picsum.photos/50" class="rounded" alt="random-image">
            </div>
            <div>
                <div class="main-comment d-flex flex-column">
                    <h6><?= $dataUser[0]["NamaUser"] ?></h6>
                    <p style="margin-bottom: 0.8rem;">
                        <?= $data['deskripsi']; ?>
                    </p>

                    <?php 
                        $idKomentarB = $data['id_komentar'];
                        $resultsReply = query("SELECT * FROM `balas_komentar` WHERE id_komentar = $idKomentarB"); 
                    ?>
                    <?php foreach ($resultsReply as $datas) : ?>
                    <?php
                        $idReply = $datas["id_user"];
                        $dataReply = query("SELECT nama_user AS NamaReply FROM user WHERE id_user = $idReply");     
                    ?>
                    <div class="d-flex align-middle justify-content-center mb-3">
                        <div class="img-comment me-3">
                            <img src="https://picsum.photos/40" class="rounded" alt="random-image">
                        </div>
                        <div>
                            <div class="main-comment" style="font-size: 0.9rem;">
                                <h6><?= $dataReply[0]["NamaReply"] ?></h6>
                                <p style="margin-bottom: 0.5rem;">
                                    <?= $datas["desk_komentar"]; ?>
                                </p>
                            </div>
                            <div class="d-flex">
                                <a href="comment.php?reply_id=" id="2" class="text-secondary me-2"><i
                                        class="mdi mdi-reply me-1"></i><small class="text-muted me-1">Reply</small></a>
                                <p style="margin-bottom: 0;"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
                <a href="" class="text-secondary me-2"><small class="text-muted me-1">Sembunyikan
                        balasan</small></a>
                <div class="d-flex">
                    <a href="comment.php?reply_id=<?= $data['id_komentar'] ?>&id_post=<?= $data["id_postingan"] ?>"
                        class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small
                            class="text-muted me-1">Reply</small></a>
                    <p><small class="text-muted me-3">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="container">
        <form action="comment.php?id_post=<?= $_GET["id_post"] ?>" method="POST" id="commentForm">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="inputAja" aria-label="Recipient's username"
                    aria-describedby="commentSubmit" name="id_post" value="<?= $_GET['id_post'] ?>"
                    style="display: none;">
                <input type="text" class="form-control" id="inputAja" placeholder="Tulis Komentar"
                    aria-label="Recipient's username" aria-describedby="commentSubmit" name="deskripsi">
                <?php if (!isset($_GET["reply_id"])) : ?>
                <button class=" btn btn-primary" type="submit" id="commentSubmit" name="addComment"
                    form="commentForm">Kirim</button>
                <?php endif;?>
                <?php if (isset($_GET["reply_id"])) : ?>
                <input type="text" class="form-control" id="inputAja" aria-label="Recipient's username"
                    aria-describedby="commentSubmit" name="id_komentar" value="<?= $_GET['reply_id'] ?>"
                    style="display: none;">
                <button class=" btn btn-primary" type="submit" id="commentSubmit" name="addReply"
                    form="commentForm">Kirim Balasan</button>
                <?php endif;?>
            </div>
        </form>
    </div>
</section>