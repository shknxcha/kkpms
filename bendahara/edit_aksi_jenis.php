<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
$id_jenis_simpanan = $_POST['id_jenis_simpanan'];
$jenis_simpanan = $_POST['jenis_simpanan'];

//menambahkan data yg sudah ada ke database
mysqli_query($conn, "UPDATE jenis_simpanan SET jenis_simpanan='$jenis_simpanan' WHERE id_jenis_simpanan=$id_jenis_simpanan;");

//mengembalikan ke halaman utama
header("location:data_jenis_simpanan.php");

?>