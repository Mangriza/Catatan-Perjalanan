<?php
session_start();
if($_SESSION['level'] != 'admin'){ ?>
    <script type="text/javascript">
    alert('Maaf Anda bukan Admin');
    window.location.assign('../index.php');
    </script>
<?php } ?>


<!DOCTYPE html>
<html lang="en" >

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Peduli Diri - Admin</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
        <style>
        body{
            background-color: #008b8b;
        }
    </style>

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       
            
            <!-- Divider -->
      

            <!-- Divider -->
          
            <!-- Sidebar Toggler (Sidebar) -->
          
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <div style="background-color: #6096BA;">
                
                
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background-color: #3ea99f;;">
                <a href="" class="navbar-brand">
                
                <h1 class="m-0 display-7 text-white"><span class="text-primary"><img src="../img/dulu-r.png" width="40px">
            </span>Peduli Diri  - Catatan Perjalanan</h1>
                                  
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                <div class="navbar-nav ml-auto py-0">
                <li class="nav-item">
            <a class="nav-link" href="admin.php">
            <i class="fas fa-house-user"></i>
                <span>..Home</span></a>
        </li> 
        <li class="nav-item">
                <a class="nav-link" href="?url=riwayat_catatan_user">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Riwayat Catatan user</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?url=data_user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Data user</span></a>
            </li>

        <li class="nav-item">
            <a class="nav-link" href="../logout.php">
                <i class="fas fa-fw fa-power-off"></i>
                <span>..Logout</span></a>
        </li>
                   
                </nav> 
                
            </div>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="mb-4 text-gray-800">   
                        <?php
                            if(!empty(@$_GET['url'])){
                                switch (@$_GET['url']) {
                                    case 'riwayat_catatan_user';
                                       include'riwayat_catatan_user.php';
                                        break;

                                    case 'data_user';
                                       include'data_user.php';
                                        break;
                                    
                                    case 'edit_catatan';
                                       include'edit_catatan.php';
                                        break;

                                    default:
                                        echo "<h3>Halaman tidak ditemukan</h3>";
                                        break;
                                }
                            }else{
                                echo"<h1>Selamat datang Admin Di Aplikasi Peduli Diri.</h1>";
                               
                                
                            }
                            
                        ?>
                        
                    </div>         
                </div>
                <!-- /.container-fluid -->
                <img src="../img/dulu-r.png"style="display:block; margin:auto;" >
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Aplikasi Peduli Diri 2022</span>
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
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../js/demo/datatables-demo.js"></script>

</body>

</html>