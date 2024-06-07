<?php
session_start();

include "connection.php";

// masukan id_use kedalam $_SESSION di form page nya
$id_user = $_SESSION["id"];

$new_nama_user = $_POST["new_nama_user"];
// $new_bio = $_POST["new_bio"];
$new_email = $_POST["new_email"];

if (!empty($new_nama_user)) {
	$statement = "update user set nama_user = \"" . $new_nama_user . "\" where id_user = " . $id_user . ";";
	echo $statement . "<br>";
	mysqli_query($conn, $statement);

	$_SESSION["nama_user"] = $new_nama_user;
}

if (!empty($new_bio)) {
	$statement = "update user set bio = \"" . $new_bio . "\" where id_user = " . $id_user . ";";
	echo $statement . "<br>";
	mysqli_query($conn, $statement);
}

if (!empty($new_email)) {
	$statement = "update user set email = \"" . $new_email . "\" where id_user = " . $id_user . ";";
	echo $statement . "<br>";
	mysqli_query($conn, $statement);

	$_SESSION["new_email"] = $new_email;
}

header("location:../homepage.php");

?>