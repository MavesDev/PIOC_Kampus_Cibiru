<?php
include "php/code.php";

$_POST["id_user"] = $_SESSION["id"];
if( isset($_POST["addComment"]) ) {
    if(add($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'comment.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'comment.php';
            </script>
        ";
    }
} else if (isset($_POST["addReply"]) ) {
    $_POST["id_komentar"] = $_GET["reply_id"];
    if(addReply($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'comment.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
                document.location.href = 'comment.php';
            </script>
        ";
    }
}
?>

<section class="section bg-services" id="services">
    <div class="container">
        <div class="d-flex align-middle justify-content-center mb-3" style="max-width: 100%;">
            <div class="img-comment me-3">
                <img src="https://picsum.photos/50" class="rounded" alt="random-image">
            </div>
            <div>
                <div class="main-comment d-flex flex-column">
                    <h6>Nama Orang</h6>
                    <p style="margin-bottom: 0.8rem;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo odit
                        rem. Ea velit
                        laboriosam tenetur optio quas facere ipsam!
                    </p>

                    <div class="d-flex align-middle justify-content-center mb-3">
                        <div class="img-comment me-3">
                            <img src="https://picsum.photos/40" class="rounded" alt="random-image">
                        </div>
                        <div>
                            <div class="main-comment" style="font-size: 0.9rem;">
                                <h6>Nama Orang</h6>
                                <p style="margin-bottom: 0.5rem;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                    nemo
                                    odit
                                    rem. Ea velit
                                    laboriosam tenetur optio quas facere ipsam!
                                </p>
                            </div>
                            <div class="d-flex">
                                <a href="comment.php?reply_id=2" id="2" class="text-secondary me-2"><i
                                        class="mdi mdi-reply me-1"></i><small class="text-muted me-1">Reply</small></a>
                                <p style="margin-bottom: 0;"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="comment.php?reply_id=2" class="text-secondary me-2"><small class="text-muted me-1">Sembunyikan
                        balasan</small></a>
                <div class="d-flex">
                    <a href="#" class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small
                            class="text-muted me-1">Reply</small></a>
                    <p><small class="text-muted me-3">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
        <div class="d-flex align-middle justify-content-center mb-3" style="max-width: 100%;">
            <div class="img-comment me-3">
                <img src="https://picsum.photos/50" class="rounded" alt="random-image">
            </div>
            <div>
                <div class="main-comment d-flex flex-column">
                    <h6>Nama Orang</h6>
                    <p style="margin-bottom: 0.8rem;">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo odit
                        rem. Ea velit
                        laboriosam tenetur optio quas facere ipsam!
                    </p>

                    <div class="d-flex align-middle justify-content-center mb-3">
                        <div class="img-comment me-3">
                            <img src="https://picsum.photos/40" class="rounded" alt="random-image">
                        </div>
                        <div>
                            <div class="main-comment" style="font-size: 0.9rem;">
                                <h6>Nama Orang</h6>
                                <p style="margin-bottom: 0.5rem;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis
                                    nemo
                                    odit
                                    rem. Ea velit
                                    laboriosam tenetur optio quas facere ipsam!
                                </p>
                            </div>
                            <div class="d-flex">
                                <a href="#" class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small
                                        class="text-muted me-1">Reply</small></a>
                                <p style="margin-bottom: 0;"><small class="text-muted">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="text-secondary me-2"><small class="text-muted me-1">Sembunyikan
                        balasan</small></a>
                <div class="d-flex">
                    <a href="#" class="text-secondary me-2"><i class="mdi mdi-reply me-1"></i><small
                            class="text-muted me-1">Reply</small></a>
                    <p><small class="text-muted me-3">Last updated 3 mins ago</small></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <form action="" method="POST" id="commentForm">
            <div class="input-group mb-3">
                <input type="text" class="form-control" id="inputAja" placeholder="Tulis Komentar"
                    aria-label="Recipient's username" aria-describedby="commentSubmit" name="deskripsi">
                <?php if (!isset($_GET["reply_id"])) : ?>
                <button class=" btn btn-primary" type="submit" id="commentSubmit" name="addComment"
                    form="commentForm">Kirim</button>
                <?php endif;?>
                <?php if (isset($_GET["reply_id"])) : ?>
                <button class=" btn btn-primary" type="submit" id="commentSubmit" name="addReply"
                    form="commentForm">Kirim Balasan</button>
                <?php endif;?>
            </div>
        </form>
    </div>
</section>