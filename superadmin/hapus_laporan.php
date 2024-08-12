<?php

include 'koneksi.php';

$id_laporan_simpanan = $_GET['id_laporan_simpanan'];

mysqli_query($conn, "DELETE FROM laporan_simpanan where id_laporan_simpanan='$id_laporan_simpanan'");

header("location:laporan_simpanan.php");

?>