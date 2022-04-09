<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');

$uname = $_SESSION['uname'];


?>

<div class="container border shadow p-4 mt-4 ">
    <h1>Welcome Your Dashboard... <?php echo $uname; ?></h1>
    
</div>

<div class="container border shadow p-4 mt-4 mb-4">
    
    <div class="row">
        <div class="row col-12">
            <div class=" mb-2 col-12">
                <h3>
                    Students
                </h3>
                
                
            </div>
            
        </div>
        <hr class="col-12">
        
        
            <div class="row col-12 health ">
            <div class=" mb-2 col-12 pl-4 ">
                <center><h4>Always pay attention to your child</h4></center>
            
            
            </div>
            
            </div>
            
            
        
        <hr class="col-12">
        
        
        <div class="row col-12">
        <?php 
         $res=mysqli_query($con,"SELECT * FROM `student` WHERE nic= '$uname' ");
         while($row=mysqli_fetch_array($res))
         {
        
        ?>

        <div class="row col-12 cd">

            <div class="col-md-4">
            <img class="imgcart" src="dda.jpg" alt="Card image cap">
            </div>
            <div class="col-md-4 middle">
                <h4><?php echo $row["indexNo"]; ?></h4>
                <br>
                <h4><?php echo $row["f_name_i"]; ?></h4>
            </div>
            <div class="col-md-4">
            
                <div class="float-sm-right">
                    <center>
                    <a href="attendance.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary dd">Attendance</a><br>
                    <a href="result.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary dd">Result</a><br>
                    <a href="health.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary dd">Health</a>
                    </center>
                    
                </div>
                
                
          
            </div>


            <!-- <div class="">
                <div class="col-sm-4 " ">
                    <img class="card-img-top" src="dda.jpg" alt="Card image cap">
                    </div>

                    <div class="col-sm-8">
                    <center>
                        <div class="">
                            <hr>
                            <h3 class=""><?php echo $row["indexNo"]; ?></h3>
                            <hr>
                            <a href="student.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary">Read More...</a>
                        </div>
                    </center>
                    </div>
                
                

            </div> -->

        
        </div>

            <?php
         }
         ?>
        </div>
        
    </div>
    

    
</div>

<?php require_once('footer.php');  ?>