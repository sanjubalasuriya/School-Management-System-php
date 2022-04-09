<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');


$id=$_GET["id"];
$indexNo="";


$res=mysqli_query($con,"SELECT * FROM `student` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $indexNo=$row["indexNo"];
    
 
}

?>

<script src="../teacher/bk/main.js"></script>

<div class="container border shadow p-4 mt-4">
<h1 class="pt-4">Attendance </h1>
<hr>

<div class="row mb-2">
            <div class="col-12" id="att_sign">
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                Attendance added Successfully!
        </div>
          </div>



<div class="row">

    <form action="" method="POST" class="col-md-12">
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
                        
                        
                      />
                      
                    </div>
                  </div>
                  
        </div>
        <button type="submit" class="btn btn-primary" id="aregister" name="aregister">Submit</button>
        <a href="attendance.php" class="btn btn-primary ">Back</a>
    </form>
</div>
</div>



<?php require_once('footer.php');  ?>