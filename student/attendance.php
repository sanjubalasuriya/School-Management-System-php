<?php include('security.php');
require_once('header.php');  

include('../db/db.php'); 

$uname = $_SESSION['uname'];



?>



<div class="container border shadow p-4 mt-4">
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
                $res=mysqli_query($con,"SELECT * FROM `attendance` WHERE indexNo = '$uname' ");
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

</div>




<?php require_once('footer.php');  ?>