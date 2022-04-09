<?php include('security.php');
require_once('header.php');
include('../db/db.php'); 


$uname = $_SESSION['uname'];
$id=$_GET["id"];
$indexNo="";
$title="";
$info="";

$res=mysqli_query($con,"SELECT * FROM `health` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    $indexNo=$row["indexNo"];
    $title=$row["title"];
    $info=$row["info"];
    
    
}
?>



<div class=" container border shadow p-4 mt-4 round">

<?php 
         $res="SELECT * FROM `student` WHERE indexNo='{$indexNo}' and nic='{$uname}'";  

         $run_query = mysqli_query($con,$res);
         if($run_query){

         while($row=mysqli_fetch_array($run_query))
         {
        
        ?>
    <div class="row">
        <div class="col-12">
            <h1>
                Update Health Details
            </h1>
            <hr>
        </div>
        <div class="row mb-2">
            <div class="col-12" id="pro">
              
            </div>
            
        </div>
        
        <div class="col-12 pl-5 pr-5">
            <form action="" method="post">
            <div class="alert alert-success" id="success" style="display:none" >
                Health Details Updated Successfully!
            </div>
            

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control"  name="indexNo" value="<?php echo $indexNo;?>"readonly>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" name="title" value="<?php echo $title;?>" >
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">info</label>
                <div class="col-sm-10">
                <input class="form-control" id=""  name="info" value="<?php echo $info;?> ">
                </div>
            </div>
            
            
            <center><button type="submit" name="hupdate" id="hupdate" class="btn btn-primary mt-3">Submit</button></center>
            
            </form>
        </div>
    </div>
    <?php
         }
        } if($run_query->num_rows < 1) {
        
            ?>
            <div class="row col-12">
            <div class='alert alert-danger col-12' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
            <center><b>  INVALID ACCESS...!</b></center>
                      
            </div>
            </div>
            
            
        
            <?php
        }
         ?>
</div>

<?php
if(isset($_POST["hupdate"]))

{
    mysqli_query($con,"UPDATE `health` SET indexNo='$_POST[indexNo]', title='$_POST[title]', info='$_POST[info]'
      WHERE id=$id") or die(mysqli_error($con));  

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="dashboard.php";
        },1000);       
    </script>
    <?php
}



?>

<?php require_once('footer.php');  ?>