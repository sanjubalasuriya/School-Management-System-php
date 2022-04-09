<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');


$id=$_GET["id"];
$indexNo="";
$time_in="";
$time_out="";
$logdate="";
$status="";




    


$res=mysqli_query($con,"SELECT * FROM `attendance` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $indexNo=$row["indexNo"];
    $time_in=$row["time_in"];
    $time_out=$row["time_out"];
    $logdate=$row["logdate"];
    $status=$row["status"];
    
    
    
}


?>

<div class="container border shadow p-4 mt-4">
<h1 class="pt-4">Attendance Update</h1>
<hr>

<div class="row">
<div class="row col-md-12 alert alert-success" id="success" style="display:none" >
                Student Submited Successfully!...
        </div>
    <form action="" method="post" class="col-md-12">
        <div class=" row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Student ID</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder=""
                        name="indexNo"
                        id="indexNo"
                        value="<?php echo $indexNo;?>"
                        readonly
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label font">
                        Time In
                      </label>
                      <input
                      class="form-control"
                        type="time"
                        placeholder=""
                        name="time_in"
                        value="<?php echo $time_in;?>"
                      />
                      
                    </div>
                  </div>
        </div>
        <div class=" row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Time Out</label>
                      <input
                      class="form-control"
                        type="time"
                        placeholder=""
                        name="time_out"
                        id=""
                        value="<?php echo $time_out;?>"
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label font">
                        Date
                      </label>
                      <input
                      class="form-control"
                        type="date"
                        placeholder=""
                        name="logdate"
                        value="<?php echo $logdate;?>"
                      />
                      
                    </div>
                  </div>
        </div>
        <div class=" row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Status</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder=""
                        name="status"
                        id=""
                        value="<?php echo $status;?>"
                        
                      />
                      
                    </div>
                  </div>
                  
        </div>
        <button type="submit" class="btn btn-primary" id="aupdate" name="aupdate">Update</button>
        <a href="attendance.php" class="btn btn-primary ">Back</a>
    </form>
</div>
</div>

<?php
if(isset($_POST["aupdate"]))

{
    mysqli_query($con,"UPDATE `attendance` SET indexNo='$_POST[indexNo]', time_in='$_POST[time_in]', time_out='$_POST[time_out]', logdate='$_POST[logdate]', status='$_POST[status]' 
     WHERE id=$id") or die(mysqli_error($con));  

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="attendance.php";
        },1000);       
    </script>
    <?php
}

if(isset($_POST["submit2"])){
  
}

?>

<?php require_once('footer.php');  ?>