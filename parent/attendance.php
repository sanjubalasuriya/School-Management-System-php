<?php include('security.php');
require_once('header.php');  

include('../db/db.php'); 
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
    <div class="row">
    <div class="col-sm-6">
        <h1>
            Attendance
        </h1>
    </div>
    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href="dashboard.php" class="btn btn-primary ">Back</a>
        </div>
    </div>
    </div>
    

</div>

<div class="container border shadow p-4 mt-4">
<div>
        

        <table class="tabl">
        <thead>
            <tr>
                <th>Date </th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Status</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `attendance` WHERE indexNo = '$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["logdate"]; ?></td>
                <td data-label="Student Name"><?php echo $row["time_in"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["time_out"]; ?></td>
                <td data-label="Student Class"><?php echo $row["status"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    

        
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