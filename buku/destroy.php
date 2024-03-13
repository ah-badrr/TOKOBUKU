<?php
require '../config.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
session_start();
$_SESSION["destroy"] = "";
header("location: index.php");
