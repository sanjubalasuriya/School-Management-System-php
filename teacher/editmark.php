<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');


$id=$_GET["id"];
$indexNo="";
$sub_id="";
$mark="";
$grade="";
$sem="";
$grade_id="";




    


$res=mysqli_query($con,"SELECT * FROM `marks` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $indexNo=$row["indexNo"];
    $sub_id=$row["sub_id"];
    $mark=$row["mark"];
    $grade=$row["grade"];
    $sem=$row["sem"];
    $grade_id=$row["grade_id"];
    
    
    
}


?>

<div class="container border shadow p-4 mt-4">
<h1 class="pt-4">Marks Update</h1>
<hr>

<div class="row">
<div class="row col-md-12 alert alert-success" id="success" style="display:none" >
                Marks Updated Successfully!...
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
                  <?php 
                
                $sql = "SELECT * FROM `subjectt` ";
                $res = mysqli_query($con, $sql);
                
                ?>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label font">
                        Subject Name
                      </label>
                      <select class="form-control" type="text"  name="sub_id" required >
                      <option value="<?php echo $sub_id;?>"><?php echo $sub_id;?></option>
                      <?php while($rows = mysqli_fetch_array($res)){
                          ?>
                          <option value="<?php echo $rows['sub_id']; ?>"><?php echo $rows['sub_id'] ?></option>
                        <?php
                      }?> 
                      </select>
                      
                    </div>
                  </div>
        </div>
        <div class=" row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Student Grade</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder=""
                        name="grade"
                        id=""
                        required=""
                        value="<?php echo $grade;?>"
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label font">
                        Marks
                      </label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder=""
                        name="mark"
                        value="<?php echo $mark;?>"
                        required=""
                      />
                      
                    </div>
                  </div>
        </div>
        <div class=" row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Marks grade</label>
                      <input
                      class="form-control"
                        type="grade_id"
                        placeholder=""
                        name="grade_id"
                        id=""
                        value="<?php echo $grade_id;?>"
                        required=""
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label font">
                        Semester
                      </label>
                      <select name="sem" id="" class="form-control" required value="<?php echo $sem;?>">
                        <option value="<?php echo $sem;?>"><?php echo $sem;?></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select>
                      
                    </div>
                  </div>
                  
        </div>
        <button type="submit" class="btn btn-primary" id="mupdate" name="mupdate">Update</button>
        <a href="attendance.php" class="btn btn-primary ">Back</a>
    </form>
</div>
</div>

<?php
if(isset($_POST["mupdate"]))

{
    mysqli_query($con,"UPDATE `marks` SET indexNo='$_POST[indexNo]', sub_id='$_POST[sub_id]', mark='$_POST[mark]', grade='$_POST[grade]', sem='$_POST[sem]', grade_id='$_POST[grade_id]' 
     WHERE id=$id") or die(mysqli_error($con));  

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="marks.php";
        },1000);       
    </script>
    <?php
}

if(isset($_POST["submit2"])){
  
}

?>

<?php require_once('footer.php');  ?>