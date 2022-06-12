<?php
//termasuk file koneksi database
include("config.php");

//mendapatkan id data dari url
$id = $_GET['id'];

//menghapus baris dari tabel
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id=$id");

//mengarahkan ke halaman tampilan (index.php dalam kasus kami)
header("Location:index.php");
?>

