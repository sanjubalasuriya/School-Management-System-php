<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');

$uname = $_SESSION['uname'];

$indexNo=$_GET["id"];



?>



<div class="container border shadow p-4 mt-4">
    
    <?php 
         $res="SELECT * FROM `student` WHERE indexNo='{$indexNo}' and nic='{$uname}'";  

         $run_query = mysqli_query($con,$res);
         if($run_query){

         while($row=mysqli_fetch_array($run_query))
         {
        
        ?>
        <div class="row mb-4">
            <div class="float-sm-right">
            <a href="dashboard.php" class="btn btn-primary ">Back</a>
            </div>
        </div>
        
        <div class="row">
        <div class="col-md-6">
        
            <div class="card" style="">
                <a href="attendance.php"><img class="card-img-top" src="att.jpg" alt="Card image cap"></a>
            <div class="card-body">
            
                <h1 class=""><b>Attendance</b></h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="attendance.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary">Read More...</a>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="">
            <a href="result.php"><img class="card-img-top" src="rs.jpg" alt="Card image cap" ></a>
            <div class="card-body">
                <h1 class=""><b>Result</b></h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="result.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary">Read More...</a>
            </div>
            </div>
            
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



<?php require_once('footer.php');  ?>