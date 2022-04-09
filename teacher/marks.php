<?php include('security.php');
require_once('header.php');  ?>

<?php include('../db/db.php');?>

<div class="">
    <div class="table-container border shadow pb-4">
    <h1 class="pt-4">Students Marks</h1>
    <hr>

    
    <table class="tabl">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Subject Name</th>
                <th>Marks Grade</th>
                <th>Marks</th>
                <th>Student Grade</th>
                <th>sem</th>
                <th>Action </th>
                
            </tr>
        </thead>
        <tbody>
        <?php 
                $res=mysqli_query($con,"SELECT * FROM `marks`");
                while($row=mysqli_fetch_array($res))
                {
                ?>
            <tr>
                <td data-label="Student ID"><?php echo $row["indexNo"]; ?></td>
                <td data-label="Student Name"><?php echo $row["sub_id"]; ?></td>
                <td data-label="Student Grade"><?php echo $row["grade_id"]; ?></td>
                <td data-label="Student Class"><?php echo $row["mark"]; ?></td>
                <td data-label="Student DOB"><?php echo $row["grade"]; ?></td>
                <td data-label="Student DOB"><?php echo $row["sem"]; ?></td>
                <td><a href="editmark.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Marks</a></td>
                
            </tr>
            <?php 
                }
                
                
                ?>
        </tbody>
    </table>
    </div>
    
</div>

<?php require_once('footer.php');  ?>