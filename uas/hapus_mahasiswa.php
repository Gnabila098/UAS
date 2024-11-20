<?php
include 'koneksi.php';
$id = $_GET['id'];

$sql = "DELETE FROM mahasiswa WHERE id=$id";

if ($coon->query($sql)=== TRUE) {
    header("Location: index.php");
    exit;
}else {
    echo "Error:" . $conn->error;
}

$coon->close();