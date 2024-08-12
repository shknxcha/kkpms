<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
        $nik = $_POST['nik'];
		$nama_anggota = $_POST['nama_anggota'];
		$foto = $_FILES['foto']['name'];
		$alamat_anggota = $_POST['alamat_anggota'];
		$jenis_kelamin = $_POST['jenis_kelamin'];
		$no_hp = $_POST['no_hp'];
		$jabatan = $_POST['jabatan'];
		$status = $_POST['status'];

        $dir = "images/";
		$tmpFile = $_FILES['foto']['tmp_name'];
		move_uploaded_file($tmpFile, $dir.$foto);

//menambahkan data yg sudah ada ke database
$query = "INSERT INTO anggota VALUES('', '$nik','$nama_anggota', '$alamat_anggota', '$no_hp', '$jabatan', '$jenis_kelamin', '$foto', '$status');";
$sql = mysqli_query($conn, $query);

//mengembalikan ke halaman utama
header("location:data_anggota.php");

?>