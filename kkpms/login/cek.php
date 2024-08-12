<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi," SELECT  * FROM  user WHERE username='$username' AND password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai super admin
	if($data['level']=="superadmin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "superadmin";
		// alihkan ke halaman dashboard super admin
		header("location:../superadmin");
 
	// cek jika user login sebagai admin
    }else if($data['level']=="admin"){
    // buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:../admin/data_anggota.php");
 
	// cek jika user login sebagai anggota
	}else if($data['level']=="anggota"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "anggota";
		// alihkan ke halaman dashboard anggota
		header("location:../anggota/data_simpanan.php");
 
	}else if($data['level']=="bendahara"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "bendahara";
		// alihkan ke halaman dashboard bendahara
		header("location:../bendahara/data_simpanan.php");
 
	}else if($data['level']=="kepala koperasi"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "kepala koperasi";
		// alihkan ke halaman dashboard kepalakoperasi
		header("location:../kepalakoperasi");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}
 
?>


