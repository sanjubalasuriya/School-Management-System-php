<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');

$uname = $_SESSION['uname'];

$res=mysqli_query($con,"SELECT * FROM `teacher` WHERE emp_id = '$uname' ");

while($row=mysqli_fetch_array($res))
{
    
    $fname=$row["f_name_i"];
    $nic=$row["nic"];
    $contact=$row["contact"];
    $dob=$row["dob"];
    $address= $row["address"];
    $email= $row["email"];
    $emp_id= $row["emp_id"];
  
    
}

?>

<div class="table-container">

      <div class="container-fluid ">
<div class="border shadow   fm">
      <div class="content-header ">
      <div class="container-fluid ">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0 ">Dashboard</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-right">
            <button href="" class="btn btn-primary " data-toggle="modal" data-target="#exampleModalCenter">Logout<i class="fas fa-sign-out-alt ml-2"></i></button>
                
                </div>
                
          </div>
          
          
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>

<!-- logout data modler -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
<!-- logout data modler -->

        <div class="row pr-4 pl-4">
        

        <div class="col-sm-6">
            <div class="border  details">
            <form action="" method="">
            

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Name</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext"   value="<?php echo $fname; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">NIC</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext" name="indexNo"  value="<?php echo $nic; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Date of Birth</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext"  value="<?php echo $dob; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Address</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext"  value="<?php echo $address; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-4 col-form-label">Contact</label>
                <div class="col-sm-8">
                <input type="text" readonly class="form-control-plaintext"  value="<?php echo $contact; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                <div class="col-sm-8">
                <input type="text" class="form-control-plaintext" name="password"  placeholder="Password" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-4 col-form-label">New Password</label>
                <div class="col-sm-8">
                <input type="text" class="form-control-plaintext" name="npass"  placeholder="New Password" value="<?php echo $emp_id; ?>">
                </div>
            </div>
            
            
            
            </form>
            <?php
                if(isset($_SESSION['error'])){
                    echo"
                    <div class='alert alert-warning text-center'>
                    
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
            <center><button href="" class="btn btn-primary " data-toggle="modal" data-target="#change">Change Password</button></center>
            </div>

        </div>


        




        <div class="col-sm-6 ">
            <div class=" p-5 mb-3 bd green">
                <div class="row">
                <div class="col-md-6">
                    <h1>Attendance</h1>
                </div>

                <div class="col-lg-6">
                    <div class="float-sm-right">
                        <a href="attendance.php" class="btn btn-primary read">Read More</a>
                    
                    </div>
                </div>
                </div>
                

            </div>

            <div class=" p-5 mb-3 bd blue">
                <div class="row">
                <div class="col-md-6">
                    <h1>Marks</h1>
                </div>

                <div class="col-lg-6">
                    <div class="float-sm-right">
                        <a href="marks.php" class="btn btn-primary read">Read More</a>
                    
                    </div>
                </div>
                </div>
                

            </div>

            <div class=" p-5 bd yellow">
                <div class="row">
                <div class="col-md-6">
                    <h1>Students</h1>
                </div>

                <div class="col-lg-6">
                    <div class="float-sm-right">
                        <a href="students.php" class="btn btn-primary read">Read More</a>
                    
                    </div>
                </div>
                </div>
                

            </div>
        </div>
        
        
        
        </div>
</div>

      </div><!-- /.container-fluid -->
      
    </div>

    <!-- password change -->
    <div class="modal fade " id="change" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
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
            <form action="pro.php" method="post">
            

            
            
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-5 col-form-label">Password</label>
                <div class="col-sm-7">
                <input type="password" class="form-control" name="password"  placeholder="Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-5 col-form-label">New Password</label>
                <div class="col-sm-7">
                <input type="password" class="form-control" name="npass"  placeholder="New Password">
                </div>
            </div>
            <div class="form-group row">
                <label for="inputPassword" class="col-sm-5 col-form-label">Confirm Password</label>
                <div class="col-sm-7">
                <input type="password" class="form-control" name="cpass"  placeholder="Confirm Password">
                
                </div>
            </div>
            <center><button type="submit" name="psubmit" id="psubmit" class="btn btn-primary mt-3">Submit</button></center>
            
            </form>
            </div>
            </center>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                
            </div>
            </div>
        </div>
        </div>
        <!-- password change -->


<?php require_once('footer.php');  ?>