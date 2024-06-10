<?php
session_start();

include "connection.php";

$id_user = $_SESSION["id_user"];

if (isset($_POST['save_data'])) {
    $gambar = $_FILES['gambar']['name'];

    if (file_exists("../imgProfile/".$_FILES['gambar']['name'])) {
        $fileName = $_FILES['gambar']['name'];
        header("location: ../profile.php");
    } else {
        $insert_query = "UPDATE user SET gambar = '$gambar' WHERE id_user = $id_user";

        $insert_query_run = mysqli_query($conn, $insert_query);
    
        if ($insert_query_run) {
            move_uploaded_file($_FILES['gambar']['tmp_name'],"../imgProfile/".$_FILES['gambar']['name']);
            header('location: ../profile.php');
        } else {
            $_SESSION['status'] = "Data Gagal Masuk";
        }
    }  
}

// masukan id_use kedalam $_SESSION di form page nya


$new_nama_user = mysqli_real_escape_string($conn, $_POST["new_nama_user"]);
$new_email = mysqli_real_escape_string($conn, $_POST["new_email"]);
$new_pass = mysqli_real_escape_string($conn, $_POST["new_pass"]);
$new_bio = mysqli_real_escape_string($conn, $_POST["new_bio"]);

if (!empty($new_nama_user)) {
    $statement = "UPDATE user SET nama_user = '$new_nama_user' WHERE id_user = $id_user;";
    echo $statement . "<br>";
    if (mysqli_query($conn, $statement)) {
        $_SESSION["nama_user"] = $new_nama_user;
    } else {
        echo "Error updating nama_user: " . mysqli_error($conn) . "<br>";
    }
}

if (!empty($new_bio)) {
    $statement = "UPDATE user SET bio = '$new_bio' WHERE id_user = $id_user;";
    echo $statement . "<br>";
    if (!mysqli_query($conn, $statement)) {
        echo "Error updating bio: " . mysqli_error($conn) . "<br>";
    }
}

if (!empty($new_email)) {
    $statement = "UPDATE user SET email = '$new_email' WHERE id_user = $id_user;";
    echo $statement . "<br>";
    if (mysqli_query($conn, $statement)) {
        $_SESSION["email"] = $new_email;
    } else {
        echo "Error updating email: " . mysqli_error($conn) . "<br>";
    }
}

if (!empty($new_pass)) {
    $hashed_pass = password_hash($new_pass, PASSWORD_DEFAULT);
    $statement = "UPDATE user SET password = '$hashed_pass' WHERE id_user = $id_user;";
    echo $statement . "<br>";
    if (!mysqli_query($conn, $statement)) {
        echo "Error updating password: " . mysqli_error($conn) . "<br>";
    }
}

header("location:../profile.php");

?>