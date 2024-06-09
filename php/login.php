<?php
include "../php/connection.php";

session_start();

$email = ($_POST ['email']);
$pass = ($_POST ['password']);

//Query data
$query = $conn->query("SELECT * FROM user WHERE email = '$email'");
$data = $query->fetch_array();
$_SESSION['data-user'] = $data['id_user'];

//Uji Jika Username Terdaftar
if ($data) {
    //Cek Password salah atau tidak
    if ($pass == $data['password']) {
        
        //Jika password sesuai
        $_SESSION['role'] = $data['role'];

        //Uji Level
        if ($data['role'] == 'Admin') {
            $_SESSION['admin'] = $data['email'];
            header("Location: ../dashboard.php");
        }
        else if ($data['role'] == 'User') {
            $_SESSION['user'] = $data['email'];
            header("Location:../index.php");
        }
    }
    else {

        echo 'Login Gagal' ;
    }
}
else {
    echo 'Email tidak ada' ;
}


?>
