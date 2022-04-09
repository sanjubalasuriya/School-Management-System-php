<?php include('security.php');
require_once('header.php'); ?>
<?php include('db/db.php');?>

<script src="db/main.js"></script>

<div class="content-header">
    <div class="container-fluid ">
        <div class="border shadow p-4 m-1  fm">
            <div class="content-header ">
                <div class="container-fluid ">
                    <div class="row mb-2 ">
                        <div class="col-sm-6">
                            <h1 class="m-0 ">Reports</h1>
                            <hr>
                        </div><!-- /.col -->

                        <div class="col-sm-6">
                            <!-- <div class="float-sm-right">
                                <a href="subject.php" class="btn btn-primary ">Register</a>
                            </div> -->
                        </div>
                    </div><!-- /.row -->


                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6 pt-3">
                                <h1 class="m-0 ">Students</h1>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <?php
                if(isset($_SESSION['error'])){
                    echo"
                    <div class='alert alert-danger'>
                    <h4>error!</h4>
                    ".$_SESSION['error']."
                    </div>
                    ";
                    unset($_SESSION['error']);
                }

                if(isset($_SESSION['success'])){
                    echo"
                    <div class='alert alert-success'>
                    <h4>Success!</h4>
                    ".$_SESSION['success']."
                    </div>
                    ";
                    unset($_SESSION['success']);

                }
                ?>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 6</h3>
                                    </center>
                                </div class="bfxx">
                                <form action="export.php" method="post">

                                    <button name="grade6" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>

                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">6 - A</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade6A" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">6 - B</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade6B" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">6 - C</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade6C" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">6 - D</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade6D" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- ---------------------------------------------------------------------------------- -->

                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 7</h3>
                                    </center>
                                </div class="bfxx">

                                <form action="export.php" method="post">

                                    <button name="grade7" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">7 - A</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade7A" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">7 - B</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade7B" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">7 - C</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade7C" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">7 - D</h3>
                                    </center>
                                </div>

                                <form action="export.php" method="post">

                                    <button name="grade7D" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- grade 8---------------------------------------------------------------------------- -->
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 8</h3>
                                    </center>
                                </div class="bfxx">

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">8 - A</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">8 - B</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">8 - C</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">8 - D</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->


                    </div>

                    <!-- -------------------------------------------------------------------- -->

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 9</h3>
                                    </center>
                                </div class="bfxx">

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">9 - A</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">9 - B</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">9 - C</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">9 - D</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- -------------------------------------------------------------------- -->

                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 10</h3>
                                    </center>
                                </div class="bfxx">

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">10 - A</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">10 - B</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">10 - C</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">10 - D</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->

                        <!-- --------------------------------------------------------------------- -->
                    </div>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Grade 11</h3>
                                    </center>
                                </div class="bfxx">

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">11 - A</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">


                                    <center>
                                        <h3 class="rph1">11 - B</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>

                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">
                                    <center>
                                        <h3 class="rph1">11 - C</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-2 col-6">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner">

                                    <center>
                                        <h3 class="rph1">11 - D</h3>
                                    </center>
                                </div>

                                <a href="#" class="small-box-footer">Export <i class="fas fa-file-export"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->


                    </div>

                    <hr>
                    <div class="row">
                        <div class="row">
                            <div class="col-sm-6 pt-3">
                                <h1 class="m-0 ">Teachers</h1>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="row">
                        <div class="col-lg-2 col-6 ">
                            <!-- small box -->
                            <div class="small-box  rp">
                                <div class="inner ">

                                    <center>
                                        <h3 class="rph1">Teachers</h3>
                                    </center>
                                </div class="bfxx">
                                <form action="export.php" method="post">

                                    <button name="teacher" type="submit" class="btnn ">Export <i
                                            class="fas fa-file-export"></i></button>
                                </form>

                            </div>
                        </div>
                        <!-- ./col -->



                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</div>



<?php require_once('footer.php'); ?>