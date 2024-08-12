<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
// $id_simpanan = $_POST['id_simpanan'];

$tgl_bayar = $_POST['tgl_bayar'];
$jml_simpanan = $_POST['jml_simpanan'];
$id_anggota = $_POST['id_anggota'];
$id_jenis_simpanan = $_POST['id_jenis_simpanan'];

//menambahkan data yg sudah ada ke database

mysqli_query($conn, "INSERT INTO simpanan values('','$tgl_bayar','$jml_simpanan', '$id_anggota','$id_jenis_simpanan')");

//mengembalikan ke halaman utama
header("location:data_simpanan.php");

?>