<?php
require_once __DIR__ . "/../koneksi.php";

$id = $_GET['id'];
$query = mysqli_query($koneksi, "DELETE FROM buku WHERE id = '$id'");

if ($query) {
    header('Location: index.php');
} else {
    echo "Gagal menghapus buku.";
}
