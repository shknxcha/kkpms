<?php
session_start();
include 'koneksi.php';
$id = $_GET['id_akun'];
$sql = mysqli_query($conn, "SELECT * FROM user where id_user=$id");
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

    <title>Super Admin - KKPMS</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                <img class="rounded-circle" src="images/img.jpeg" style="width: 50px;" alt="Logo KKPMS">
                </div>
                <div class="sidebar-brand-text mx-3">Super Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Heading -->

            <!-- Nav Item - Charts -->
            <li class="nav-item active">
                <a class="nav-link" href="akun.php">
                    <i class="fa fa-user"></i>
                    <span>Akun</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="data_anggota.php">
                    <i class="fa fa-user"></i>
                    <span>Data Anggota</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="data_simpanan.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Data Simpanan</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="data_jenis_simpanan.php">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Daftar Jenis Simpanan</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                  
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                     

                        <!-- Nav Item - Alerts -->
                        
                

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Super Admin</span>
                                <i class='fas fa-ellipsis-v'></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                              
                                <a class="dropdown-item" href="../index.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Content Row -->

                    <div class="row">
                        <!-- Begin Page Content -->
                        <div class="container-fluid">

                            <!-- Page Heading -->
                           

                            <!-- DataTales Example -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengubahan Data Akun</h6>
                                </div>
                                <div class="card-body">

                                <?php while($agt = mysqli_fetch_array($sql)) { ?>
                                    <form method="post" action="edit_aksi_akun.php" enctype="multipart/form-data">
                                        <div class="mb-3">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" value="<?php echo $agt['username']; ?>" required>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input type="text" name="password" class="form-control"
                                                placeholder="Password"value="<?php echo $agt['password']; ?>">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <input type="text" name="konPassword" class="form-control"
                                                placeholder="Konfirmasi Password"value="<?php echo $agt['password']; ?>">
                                        </div>
                                        <div class="mb-3">
        <label  class="form-label">Level</label>
            <select class="form-select" name="level">
                <option selected>--Pilih Level--</option>
                <option value="superadmin" <?php if($agt['level']=='superadmin'){echo "selected";} ?>>Super Admin</option>
	            <option value="admin" <?php if($agt['level']=='admin'){echo "selected";} ?>>Admin</option>
	            <option value="bendahara" <?php if($agt['level']=='bendahara'){echo "selected";} ?>>Bendahara</option>
	            <option value="anggota" <?php if($agt['level']=='anggota'){echo "selected";} ?>>Anggota</option>
	            <option value="kepala koperasi" <?php if($agt['level']=='kepala koperasi'){echo "selected";} ?>>Kepala Koperasi</option>
            </select>
    </div>
                                        <button type="submit" name="id_user" value="<?=$agt["id_user"]?>" class="btn btn-primary">Submit</button>
                                    </form>
                                    <?php } ?>
                                </div>
                            </div>

                        </div>
                        <!-- /.container-fluid -->

                    </div>

                </div>
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; KKPMS 2022</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
               
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                    <a class="btn btn-primary" href="../index.php">Keluar</a>
                </div>
            </div>
        </div>
    </div>

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

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

</body>

</html>