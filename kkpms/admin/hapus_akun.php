<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_user = $_GET['id_akun'];
 
 
// menghapus data dari database
mysqli_query($conn,"DELETE FROM user WHERE id_user=$id_user;");
// mengalihkan halaman kembali ke index.php
header("location:akun.php");
 
?>