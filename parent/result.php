<?php include('security.php');
require_once('header.php');  

include('../db/db.php'); 

$indexNo=$_GET["id"];

  ?>


<div class="container border shadow p-4 mt-4">
    <div class="row">
    <div class="col-sm-6">
        <h1>
            Result
        </h1>
    </div>

    <div class="col-sm-6">
        <div class="float-sm-right">
            <a href="dashboard.php" class="btn btn-primary ">Back</a>
        </div>
    </div>
    </div>
    
</div>

<div class="container border shadow p-4 mt-4 bl">
    <div>
        <h4>
            Grade 6
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='6' and sem='1' and indexNo ='$indexNo'");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='6' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>

<div class="container border shadow p-4 mt-4">
    <div>
        <h4>
            Grade 7
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='7' and sem='1' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='7' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>

<div class="container border shadow p-4 mt-4 bl">
    <div>
        <h4>
            Grade 8
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='8' and sem='1' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='8' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>

<div class="container border shadow p-4 mt-4">
    <div>
        <h4>
            Grade 9
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='9' and sem='1' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='9' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>

<div class="container border shadow p-4 mt-4 bl">
    <div>
        <h4>
            Grade 10
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='10' and sem='1' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='10' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>

<div class="container border shadow p-4 mt-4">
    <div>
        <h4>
            Grade 11
        </h4>
        <hr>
        <h6>
            Semester 1
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='11' and sem='1' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    <br>
    <h6>
            Semester 2
        </h6>

        <table class="tabl">
        <thead>
            <tr>
                <th>Subject </th>
                <th>Marks</th>
                <th>Semester</th>
                <th>Grade</th>
                
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks` WHERE grade='11' and sem='2' and indexNo ='$indexNo' ");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Name"><?php echo $row["mark"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["sem"]; ?></td>
                <td data-label="Student Class"><?php echo $row["grade_id"]; ?></td>
                
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>

</div>




<?php require_once('footer.php');  ?>