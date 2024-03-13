<?php
require '../config.php';
$id = $_GET['id'];
$buku = mysqli_query($conn, "SELECT * FROM buku WHERE penerbit = $id");
if (mysqli_num_rows($buku) != 0) {
    session_start();
    $_SESSION["errdes"] = "";
    header("location: index.php");
} else {
    mysqli_query($conn, "DELETE FROM penerbit WHERE id = $id");
    session_start();
    $_SESSION["destroy"] = "";
    header("location: index.php");
}
