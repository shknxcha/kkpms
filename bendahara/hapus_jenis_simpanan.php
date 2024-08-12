<?php

include 'koneksi.php';

$id_jenis_simpanan = $_GET['id_jenis_simpanan'];

mysqli_query($conn, "DELETE FROM jenis_simpanan WHERE id_jenis_simpanan='$id_jenis_simpanan';");

header("location: data_jenis_simpanan.php");

?>