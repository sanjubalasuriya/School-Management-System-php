<?php include('security.php');
require_once('header.php'); ?>
<?php include('db/db.php');



$id=$_GET["id"];
$f_name="";
$f_name_i="";
$emp_id="";
$contact="";
$email="";
$dob="";
$gender="";
$nic="";
$subject="";
$address="";
$status="";


    


$res=mysqli_query($con,"SELECT * FROM `teacher` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $f_name=$row["f_name"];
    $f_name_i=$row["f_name_i"];
    $emp_id=$row["emp_id"];
    $contact=$row["contact"];
    $email=$row["email"];
    $dob=$row["dob"];
    $gender=$row["gender"];
    $nic=$row["nic"];
    $subject=$row["subject"];
    $address=$row["address"];
    $status=$row["status"];
    
}


?>



<div class="content-header">
    <div class="container-fluid fm">


        <form class="border shadow p-4 fm" method="post">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Teacher</h1>
                    <hr>
                </div><!-- /.col -->

            </div><!-- /.row -->

            <div class="row mb-2">
                <div class="col-md-12" id="">
                    <div class="alert alert-success" id="success" style="display:none">
                        Teacher Updated Successfully!
                    </div>
                </div>

            </div>
            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input class="form-control" type="text" placeholder="Enter Full Name" name="f_name" id="f_name"
                            value="<?php echo $f_name;?>" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label font">
                            Full Name with Initial
                        </label>
                        <input class="form-control" type="text" placeholder="Enter Full Name with Initial"
                            name="f_name_i" value="<?php echo $f_name_i;?>" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Employee Id</label>
                        <input class="form-control" type="text" placeholder="Enter Full Name" name="emp_id"
                            value="<?php echo $emp_id;?>" readonly />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            Contact
                        </label>
                        <input class="form-control" type="text" placeholder="Enter Contact" name="contact"
                            value="<?php echo $contact;?>" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" placeholder="Enter Full Name" name="email"
                            value="<?php echo $email;?>" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            Date of Birth
                        </label>
                        <input class="form-control" type="date" placeholder="" name="dob" value="<?php echo $dob;?>" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" type="fullname" placeholder="Enter Full Name" name="gender"
                            value="<?php echo $gender;?>">
                            <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            NIC
                        </label>
                        <input class="form-control" type="initialname" placeholder="Enter Full Name with Initial"
                            name="nic" value="<?php echo $nic;?>" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Subject</label>
                        <input class="form-control" type="fullname" placeholder="Enter Full Name" name="subject"
                            value="<?php echo $subject;?>" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <input class="form-control" type="fullname" placeholder="Enter Full Name" name="status"
                            value="<?php echo $status;?>" />

                    </div>

                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label ">
                            Address
                        </label>
                        <input class="form-control" type="initialname" placeholder="Enter Full Name with Initial"
                            name="address" value="<?php echo $address;?>" />

                    </div>
                </div>

            </div>

            <button type="submit" class="btn btn-primary" id="tupdate" name="tupdate">Update</button>
            <a href="teachers.php" class="btn btn-primary ">Back</a>


        </form>

    </div>
</div>



<?php
if(isset($_POST["tupdate"]))

{
    mysqli_query($con,"UPDATE `teacher` SET f_name='$_POST[f_name]', f_name_i='$_POST[f_name_i]', emp_id='$_POST[emp_id]', contact='$_POST[contact]', email='$_POST[email]', 
    dob='$_POST[dob]', gender='$_POST[gender]', nic='$_POST[nic]', subject='$_POST[subject]', address='$_POST[address]', status='$_POST[status]' WHERE id=$id") or die(mysqli_error($con));  

    ?>
<script type="text/javascript">
document.getElementById("success").style.display = "block";
setTimeout(function() {
    window.location = "teachers.php";
}, 1000);
</script>
<?php
}

if(isset($_POST["submit2"])){
  
}

?>


<?php require_once('footer.php'); ?>