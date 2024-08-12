<?php 

//koneksi database
include 'koneksi.php';

//menangkap data dari form inputan
$idUser = $_POST['id_user'];
$level = $_POST['level'];
$username = $_POST['username'];
$password = $_POST['password'];
$konpassword = $_POST['konPassword'];
if($password == $konpassword){
    //menambahkan data yg sudah ada ke database
    $query = "UPDATE user SET username='$username', password= '$password', level='$level' WHERE id_user = '$idUser';";
    $sql = mysqli_query($conn, $query);
    
    echo "<script>alert(Sukses Menambahkan Data)</script>";
    //mengembalikan ke halaman utama
    header("location: akun.php");
    exit;
}
echo "<script>alert(Password dan Konfirmasi Password harus sama)</script>";
header("location: edit_akun.php");

?>