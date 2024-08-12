<?php 
    include 'koneksi.php';

    $query = "SELECT * FROM anggota";
    $sql = mysqli_query($conn, $query);
    $no = 0;

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - KKPMS</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
<div class="container-fluid">

                    <!-- Content Row -->

<div class="row">
                                        <!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<section class="kop">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                
                </div>
                <div class="col-md-3">
                <img src="images\img.jpeg" class="rounded-circle" height="100px">
                </div>
                <div class="col-md-8" style="margin-left: -150px;">
                    <center>
                    <h1 style="text-align:center;" class="h3 mb-2 text-gray-800">KOPERASI KONSUMEN PEDAGANG</h1>
        <h1 style="text-align:center;" class="h3 mb-2 text-gray-800">MANDIRI SEJAHTERA KABUPATEN TANAH LAUT</h1>
        
        <h6 style="text-align:center;"> Jl. A.Nawawi RT.02 RW1.01 Kel.Karang taruna, Kec.Pelaihari, Kab.Tanah Laut, Prov.Kalimantan Selatan</h6>
<hr width=125%"" style ="border-top: 2px solid black; margin-left: -120px;">
                    </center>
                </div>
            </div>
        </div>


<!-- DataTales Example -->
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
					    <th>NIK</th>
					    <th>Nama</th>
					    <th>Jabatan</th>
					    <th>Jenis Simpanan</th>
					    <th>Jumlah Simpanan</th>
					    <th>Tanggal Bayar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($result = mysqli_fetch_assoc($sql)){
                        $idAnggota = $result["id_anggota"];
                        $querySimpanan = mysqli_query($conn, "SELECT * FROM simpanan WHERE id_anggota = $idAnggota");
                        while($simpanan = mysqli_fetch_assoc($querySimpanan)){
                            $id_jenis_simpanan = $simpanan["id_jenis_simpanan"];
                            $queryJenisSimpanan = mysqli_query($conn, "SELECT * FROM jenis_simpanan WHERE id_jenis_simpanan = $id_jenis_simpanan");
                            $jenisSimpanan = mysqli_fetch_assoc($queryJenisSimpanan);
                    ?>
                    <tr>
                        <td><?php echo ++$no; ?></td>
                        <td><?php echo $result['nik']; ?></td>
                        <td><?php echo $result['nama_anggota']; ?></td>
                        <td><?php echo $result['jabatan']; ?></td>
                        <td><?php echo $jenisSimpanan['jenis_simpanan']; ?></td>
                        <td><?php echo $simpanan['jml_simpanan']; ?></td>
                        <td><?php echo $simpanan['tgl_bayar']; ?></td>
                    </tr>
                    <?php } ?>
                    <?php } ?>
                </tbody>
            </table>

</div>
<!-- /.container-fluid -->

                    </div> 

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->


        
    
    </div>
    <!-- End of Page Wrapper -->


    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="assets/js/demo/chart-area-demo.js"></script>
    <script src="assets/js/demo/chart-pie-demo.js"></script>
    <script>
        window.print();
    </script>

</body>

</html>