<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
        $idAnggota = $_POST['nama_anggota'];
		$level = $_POST['level'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$konpassword = $_POST['konPassword'];
		if($password == $konpassword){
			//menambahkan data yg sudah ada ke database
			
		$query = "INSERT INTO user VALUES('', '$username','$password', '$level', $idAnggota);";	
		$sql = mysqli_query($conn, $query);
		
			echo "<script>Sukses Menambahkan Data</script>";
			//mengembalikan ke halaman utama
			header("location: akun.php");
			exit;
		}
		echo "<script>Password dan Konfirmasi Password harus sama</script>";
		header("location: akun.php");

?>