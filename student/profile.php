<?php include('security.php');
require_once('header.php');
include('../db/db.php'); 


$uname = $_SESSION['uname'];
$res=mysqli_query($con,"SELECT * FROM `student` WHERE indexNo = '$uname' ");

while($row=mysqli_fetch_array($res))
{
    
    $fname=$row["f_name"];
    $indexNo=$row["indexNo"];
    $grade=$row["grade"];
    $dob=$row["dob"];
    $fname=$row["f_name"];
    $class=$row["class"];
    $indexNo=$row["indexNo"];
    
    
    
}

?>



<div class=" container border shadow p-4 mt-4 round">
    <div class="row">
        <div class="col-12">
            <h1>
                Profile
            </h1>
            <hr>
        </div>
        <div class="row mb-2">
            <div class="col-12" id="pro">

            </div>

        </div>

        <div class="col-12 pl-5 pr-5">
            <form action="pro.php" method="post">
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

                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $fname; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Index No</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" name="indexNo"
                            value="<?php echo $indexNo; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Date of Birth</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $dob; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Class</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $class; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Grade</label>
                    <div class="col-sm-10">
                        <input type="text" readonly class="form-control-plaintext" value="<?php echo $grade; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="npass" placeholder="New Password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Confirm Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" name="cpass" placeholder="Confirm Password">

                    </div>
                </div>
                <center><button type="submit" name="psubmit" id="psubmit" class="btn btn-primary mt-3">Submit</button>
                </center>

            </form>
        </div>
    </div>
</div>



<?php require_once('footer.php');  ?>