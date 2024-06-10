<?php 
session_start();
$connection = mysqli_connect("localhost", "root", "", "pioc");

if(isset($_POST['save_data'])){
    $gambar = $_FILES['gambar']['name'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $datetime = new DateTime("now", new DateTimeZone("Asia/Jakarta"));
    $waktu = $datetime->format("Y-m-d H:i:s");
    $id_user = $_SESSION["id_user"];

    if (file_exists("../imgUpload/".$_FILES['gambar']['name'])) {
        $fileName = $_FILES['gambar']['name'];
        $_SESSION['status'] = "Maaf "."<b>$fileName</b>"." Telah Tersedia, Silahkan Ganti Nama File Gambar";
        header("location: ../post.php");
    } else {
        $insert_query = "CALL AddNewPost('$judul','$gambar','$deskripsi','0','$waktu','$kategori','$id_user','Test','0','1')";

        $insert_query_run = mysqli_query($connection, $insert_query);
    
        if ($insert_query_run) {
            move_uploaded_file($_FILES['gambar']['tmp_name'],"../imgUpload/".$_FILES['gambar']['name']);
            $_SESSION['status'] = "<b>Data Berhasil Masuk</b>, Mohon Menunggu Persetujuan Admin";
            header('location: ../post.php');
        } else {
            $_SESSION['status'] = "Data Gagal Masuk";
        }
    }  
}

function query($query) {
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

function add($data) {
    global $connection;

    $deskripsi = $data["deskripsi"];
    $id_postingan = $data["id_post"];
    $id_user = $data["id_user"];

    $query = "INSERT INTO `komentar` (`deskripsi`, `id_postingan`, `id_user`) 
    VALUES 
    ('$deskripsi', '$id_postingan', '$id_user')";
    
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function addReply($data) {
    global $connection;

    $deskripsi = $data["deskripsi"];
    $id_komentar = $data["id_komentar"];
    $id_user = $data["id_user"];

    $query = "INSERT INTO `balas_komentar` (`desk_komentar`, `id_komentar`, `id_user`) 
    VALUES 
    ('$deskripsi', $id_komentar, '$id_user')";
    
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function addLike($data) {
    global $connection;

    // $id_post = $data["id_post"];
    $id_user = $data["id"];
    $id_post = $data["id_post"];

    $ver = mysqli_query($connection, "SELECT * FROM suka WHERE id_user = $id_user AND id_postingan = $id_post");

    if( mysqli_num_rows($ver) === 1 ) {
        $query = "DELETE FROM `suka` WHERE id_user = $id_user AND id_postingan = $id_post";
    } else {

        $query = "INSERT INTO `suka` (`id_user`, `id_postingan`) 
        VALUES 
        ('$id_user', '$id_post')";
    }

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

?>