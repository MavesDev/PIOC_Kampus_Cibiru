<?php 
$connection = mysqli_connect("localhost", "root", "", "pioc");

if(isset($_POST['save_data'])){
    $gambar = $_FILES['gambar']['name'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $kategori = $_POST['kategori'];
    $waktu = date("Y-m-d H:i:s");


    if (file_exists("../imgUpload/".$_FILES['gambar']['name'])) {
        $fileName = $_FILES['gambar']['name'];
        $_SESSION['status'] = "Maaf "."<b>$fileName</b>"." Telah Tersedia, Silahkan Ganti Nama File Gambar";
        header("location: ../post.php");
    } else {
        $insert_query = "INSERT INTO `postingan`(`nama_kegiatan`, `gambar`, `deskripsi`, `status`, `waktu_posting`, `id_kategori`, `id_user`, `jenis_postingan`, `harga`, `suka`) VALUES ('$judul','$gambar','$deskripsi','0','$waktu','$kategori','1','Test','0','1')";

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

function add($data) {
    global $connection;

    $deskripsi = $data["deskripsi"];
    // $id_postingan = $data["id_post"];
    $id_user = $data["id_user"];

    $query = "INSERT INTO `komentar` (`deskripsi`, `id_postingan`, `id_user`) 
    VALUES 
    ('$deskripsi', 2, '$id_user')";
    
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function addReply($data) {
    global $connection;

    $deskripsi = $data["deskripsi"];
    $id_postingan = $data["id_komentar"];
    $id_user = $data["id_user"];

    $query = "INSERT INTO `balas_komentar` (`desk_komentar`, `id_komentar`, `id_user`) 
    VALUES 
    ('$deskripsi', $id_postingan, '$id_user')";
    
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

function addLike($data) {
    global $connection;

    // $id_post = $data["id_post"];
    $id_user = $data["id"];

    $query = "INSERT INTO `suka` (`id_user`, `id_postingan`) 
    VALUES 
    ('$id_user', 2)";
    
    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}

?>