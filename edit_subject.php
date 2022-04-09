<?php include('security.php');
require_once('header.php'); ?>

<?php include('db/db.php');


$id=$_GET["id"];
$sub_id="";
$sub_name="";


$res=mysqli_query($con,"SELECT * FROM `subjectt` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    $sub_id=$row["sub_id"];
    $sub_name=$row["sub_name"];
    
}


?>

<div class="content-header">
      <div class="container-fluid ">
        

        <form class="border shadow p-4 fm" method="post">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subject Update</h1>
            <hr>
          </div>
          <div class="col-sm-6  ">
            
            
          </div>
          
        </div><!-- /.row -->

        <div class="row mb-2">
            <div class="col-md-12" id="sub_sign">
            <div class="alert alert-success" id="success" style="display:none" >
                Supplier Updated Successfully!
        </div>
            </div>
          </div>
        <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Subject Id</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Subject Id"
                        name="sub_id"
                        id="f_name"
                        value="<?php echo $sub_id;?>"
                        readonly
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Subject Name
                      </label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Subject Name"
                        name="sub_name"
                        value="<?php echo $sub_name;?>"
                      />
                      
                    </div>
                  </div>
                </div>

        
        <button type="submit" class="btn btn-primary" id="sub_update" name="sub_update"></a>Update</button>
        <a href="subjects.php" class="btn btn-primary ">Back</a>


        
        </form>


      </div>
    </div>


    <?php
if(isset($_POST["sub_update"]))

{
    mysqli_query($con,"UPDATE `subjectt` SET sub_id='$_POST[sub_id]', sub_name='$_POST[sub_name]' WHERE id=$id") or die(mysqli_error($con));  

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="subjects.php";
        },1000);       
    </script>
    <?php
}

?>
    

<?php require_once('footer.php'); ?>