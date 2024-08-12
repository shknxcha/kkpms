<?php

include 'koneksi.php';

$id_simpanan = $_GET['id_simpanan'];

mysqli_query($conn, "DELETE FROM simpanan WHERE id_simpanan='$id_simpanan';");

header("location:data_simpanan.php");

?>