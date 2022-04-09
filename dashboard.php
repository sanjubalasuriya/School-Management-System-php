<?php 
include('security.php');
require_once('header.php'); 
include('db/db.php');


?>

<link rel="stylesheet" href="css/all.css">
<!-- Content Header (Page header) -->

<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
</div>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 ">Dashboard</h1>
            </div><!-- /.col -->

        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-lg-3 col-6 ">
                <!-- small box -->
                <a href="students.php">
                    <div class="small-box  bx">
                        <div class="inner ">
                            <?php 

                            $query = "SELECT id FROM student ORDER BY id";
                            $Query_run = mysqli_query($con, $query);

                            $row = mysqli_num_rows($Query_run);

                            echo '<h3>'.$row.'</h3>'


                            ?>

                            <p>Students</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="teachers.php">
                    <div class="small-box  bx1">
                        <div class="inner">
                            <?php 

                $query = "SELECT id FROM teacher ORDER BY id";
                $Query_run = mysqli_query($con, $query);

                $row = mysqli_num_rows($Query_run);

                echo '<h3>'.$row.'</h3>'

                
                ?>
                            <p>Teachers</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <a href="parents.php">
                    <div class="small-box  bx2">
                        <div class="inner">
                            <?php 

                $query = "SELECT id FROM parent ORDER BY id";
                $Query_run = mysqli_query($con, $query);

                $row = mysqli_num_rows($Query_run);

                echo '<h3>'.$row.'</h3>'


                ?>

                            <p>Parents</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-friends"></i>
                        </div>

                    </div>
                </a>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
                <!-- small box -->

            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-6">




            </div>

        </div>

    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?php require_once('footer.php'); ?>