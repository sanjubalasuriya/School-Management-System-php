<?php include('security.php');
require_once('header.php');
include('db/db.php'); 


$uname = $_SESSION['uname'];


?>



<div class="content-header">
    <div class="row">
        
        
        
        <div class="container-fluid ">
        <form class="border shadow p-4 m-2 fm" action="pro.php" method="post">

            

            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Change Password</h1>
                <hr>
            </div><!-- /.col -->
            
            </div><!-- /.row -->

            <div class="row mb-2">
                <div class="col-md-12" id="admin_sign">
                
                </div>
                <div class="col-md-12 " id=""  >
                <?php
                    if(isset($_SESSION['error'])){
                        echo"
                        <div class='alert alert-danger text-center'>
                        
                        ".$_SESSION['error']."
                        </div>
                        ";
                        unset($_SESSION['error']);
                    }

                    if(isset($_SESSION['success'])){
                        echo"
                        <div class='alert alert-success text-center'>
                        
                        ".$_SESSION['success']."
                        </div>
                        ";
                        unset($_SESSION['success']);

                    }
                    ?>
            </div>
            
            </div>
            <div class=" row ">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-label">User name</label>
                        <input
                        class="form-control"
                            type="text"
                            placeholder="Enter username "
                            name="uname"
                            id="uname"
                            value="<?php echo $uname;?>"
                            readonly
                        />
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-label">
                            Password
                        </label>
                        <input
                        class="form-control"
                            type="password"
                            placeholder="Currunt password "
                            name="password"
                        />
                        
                        </div>
                    </div>
                    </div>

                    <div class=" row ">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-label">New Password</label>
                        <input
                        class="form-control"
                            type="password"
                            placeholder="New Password"
                            name="npass"
                            
                        />
                        
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="form-label">
                            Confirm Password
                        </label>
                        <input
                        class="form-control"
                            type="password"
                            placeholder="Confirm Password"
                            name="cpass"
                            
                        />
                        
                        </div>
                    </div>
                    </div>

                    


            <button type="submit" class="btn btn-primary" id="psubmit" name="psubmit">Submit</button>
            <!-- <a href="subjects.php" class="btn btn-primary ">Back</a> -->
            </form>
        </div>
    </div>
</div>



<?php require_once('footer.php');  ?>