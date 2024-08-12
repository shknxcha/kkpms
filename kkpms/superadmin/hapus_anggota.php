<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id_anggota = $_GET['id_anggota'];
 
 
// menghapus data dari database
mysqli_query($conn,"UPDATE anggota SET status='non-aktif' WHERE id_anggota=$id_anggota;");
// mengalihkan halaman kembali ke index.php
header("location:data_anggota.php");
 
?>