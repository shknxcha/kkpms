<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
$id_anggota = $_POST['id_anggota'];
$nik = $_POST['nik'];
$nama_anggota = $_POST['nama_anggota'];
$alamat_anggota = $_POST['alamat_anggota'];
$no_hp = $_POST['no_hp'];
$jabatan = $_POST['jabatan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$foto = $_POST['foto'];

//menambahkan data yg sudah ada ke database
mysqli_query($conn, "UPDATE anggota SET nama_anggota='$nama_anggota', nik='$nik', alamat_anggota='$alamat_anggota', no_hp='$no_hp', jabatan='$jabatan', jenis_kelamin='$jenis_kelamin', foto='$foto' WHERE id_anggota='$id_anggota';");

//mengembalikan ke halaman utama
header("location:data_anggota.php");

?>