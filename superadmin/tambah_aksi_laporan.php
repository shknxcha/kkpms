<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
$id_anggota = $_POST['id_anggota'];
$jenis_simpanan = $_POST['jenis_simpanan'];
$id_simpanan = $_POST['id_simpanan'];
$jml_simpanan = $_POST['jml_simpanan'];

//menambahkan data yg sudah ada ke database
mysqli_query($conn, "INSERT INTO laporan_simpanan values('','$id_anggota','$jenis_simpanan','$id_simpanan','$jml_simpanan')");

//mengembalikan ke halaman utama
header("location:laporan_simpanan.php");

?>