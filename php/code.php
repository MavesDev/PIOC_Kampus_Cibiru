<?php 
session_start();
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
        header("location: ../index.php");
    } else {
        $insert_query = "CALL AddNewPost('$judul','$gambar','$deskripsi','0','$waktu','$kategori','1','Test','0','1')";

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

?>