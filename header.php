<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ABC SCHOOL</title>


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="dist/css/adminlte.min.css">

    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

    <link rel="shotcut icon" href="img/Logo..png" type="x-icon">

    <link rel="stylesheet" href="css/all.css">



</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->


        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <button type="button" class="btn btn-primary " data-toggle="modal"
                        data-target="#exampleModalCenter">
                        Logout<i class="fas fa-sign-out-alt ml-2"></i>
                    </button>

                    <!-- Modal -->

                </li>



                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <center>
                            <h5 class="modal-title" id="exampleModalLongTitle">Ready to Leave?</h5>
                        </center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <center>
                        <div class="modal-body ">
                            Select "Logout" bellow if you are ready to logout
                        </div>
                    </center>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <form action="logout.php" method="POST">
                            <button type="submit" class="btn btn-primary" name="logout">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Sidebar Container -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4 navba">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ABC school</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar ">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">

                    <div class="info">
                        <a class="d-block pl-3">HI... John </a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-5 ">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        <li class="">
                            <a href="dashboard.php" class="nav-link  mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Dashboard

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="teachers.php" class="nav-link  mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Teacher

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="students.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Student

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="parents.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Parent

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="subjects.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Subject

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="attendance.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Attendance

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="report.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Reports

                                </p>
                            </a>
                        </li>

                        <li class="">
                            <a href="profile.php" class="nav-link mb-2">
                                <i class="nav-icon fas fa-th i mr-2"></i>
                                <p class="i">
                                    Profile

                                </p>
                            </a>
                        </li>






                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>

            <!-- /.sidebar -->
        </aside>



        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">