<?php include('security.php');
require_once('header.php'); ?>
<?php include('db/db.php');



$id=$_GET["id"];
$f_name="";
$f_name_i="";
$nic="";
$indexNo="";
$grade="";
$class="";
$dob="";
$gender="";
$status="";



    


$res=mysqli_query($con,"SELECT * FROM `student` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $f_name=$row["f_name"];
    $f_name_i=$row["f_name_i"];
    $nic=$row["nic"];
    $indexNo=$row["indexNo"];
    $grade=$row["grade"];
    $class=$row["class"];
    $dob=$row["dob"];
    $gender=$row["gender"];
    $status=$row["status"];
    
    
}


?>



<div class="content-header">
    <div class="container-fluid fm">


        <form class="border shadow p-4" method="post">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Student Update</h1>
                    <hr>
                </div>
                <div class="col-sm-6">
                    <div class="float-sm-right">
                        <div class="form-group">

                            <input class="form-control" type="text" placeholder="" name="nic" id="nic"
                                value="<?php echo $nic;?>" readonly />

                        </div>


                    </div>

                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-12" id="stsign">

                </div>
                <div class="col-md-12 alert alert-success" id="success" style="display:none">
                    Student Submited Successfully!...
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
                        <label class="form-label">
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
                        <label class="form-label">Index No</label>
                        <input class="form-control" type="text" placeholder="" name="indexNo"
                            value="<?php echo $indexNo ?>" readonly />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Grade</label>
                        <select class="form-control" type="fullname" placeholder="Enter Full Name" name="grade">
                            <option value="<?php echo $grade;?>"><?php echo $grade;?></option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>

                        </select>

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Class</label>
                        <select class="form-control" type="text" placeholder="Enter Full Name" name="class">
                            <option value="<?php echo $class;?>"><?php echo $class;?></option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                        </select>

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
                        <select class="form-control" type="fullname" placeholder="Enter Full Name" name="gender">
                            <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Status</label>
                        <select class="form-control" type="fullname" placeholder="Enter Full Name" name="status">
                            <option value="<?php echo $status;?>"><?php echo $status;?></option>
                            <option value="Active">Active</option>
                            <option value="Deactive">Deactive</option>
                        </select>

                    </div>
                </div>
            </div>





            <button type="submit" class="btn btn-primary" id="stupdate" name="stupdate">Submit</button>
            <a href="parents.php" class="btn btn-primary ">Back</a>

            <?php

require_once 'phpqrcode/qrlib.php';

$path = 'css/';
$file = $path.uniqid().".png";



QRcode::png($indexNo, $file, 'L',10);

echo "<center><img src='".$file."' download><center>";




?>

        </form>



    </div>
</div>


<?php
if(isset($_POST["stupdate"]))

{
    mysqli_query($con,"UPDATE `student` SET f_name='$_POST[f_name]', f_name_i='$_POST[f_name_i]', nic='$_POST[nic]', indexNo='$_POST[indexNo]', grade='$_POST[grade]', 
    class='$_POST[class]', dob='$_POST[dob]', gender='$_POST[gender]', status='$_POST[status]' WHERE id=$id") or die(mysqli_error($con));  

    ?>
<script type="text/javascript">
document.getElementById("success").style.display = "block";
setTimeout(function() {
    window.location = "students.php";
}, 1000);
</script>
<?php
}

if(isset($_POST["submit2"])){
  
}

?>


<?php require_once('footer.php'); ?>