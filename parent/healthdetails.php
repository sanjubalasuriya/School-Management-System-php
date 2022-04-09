<?php include('security.php');
require_once('header.php');
include('../db/db.php'); 


$uname = $_SESSION['uname'];
$indexNo=$_GET["id"];

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
                Profile
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
                Health Details Added Successfully!
        </div>
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

            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control"  name="indexNo" value="<?php echo $row["indexNo"]; ?>" readonly>
                </div>
            </div>
            
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                <input type="text"  class="form-control" name="title"  >
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">info</label>
                <div class="col-sm-10">
                <textarea class="form-control" id="" rows="3" name="info"></textarea>
                </div>
            </div>
            
            
            <center><button type="submit" name="hsubmit" id="hsubmit" class="btn btn-primary mt-3">Submit</button></center>
            
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

if(isset($_POST["hsubmit"]))

{
    $indexNo = $_POST["indexNo"];
    $title = $_POST["title"];
    $info = $_POST["info"];
    
    
    
    $sql = "INSERT INTO `health` (`id`, `indexNo`, `title`, `info`) 
        VALUES (NULL, '$indexNo', '$title', '$info');";

        
        $run_query = mysqli_query($con,$sql);
        if($run_query){

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="dashboard.php";
        },1000);       
    </script>
    <?php
        }
}



?>


<?php require_once('footer.php');  ?>