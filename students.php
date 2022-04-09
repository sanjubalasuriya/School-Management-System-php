
<?php include('security.php');
 require_once('header.php'); ?>
<?php include('db/db.php');?>
<script src="db/main.js"></script>

<div class="content-header">
      <div class="container-fluid ">
<div class="border shadow p-4 m-1  fm">
      <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Students</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="parents.php" class="btn btn-primary ">Register</a>
                
                </div>
                
          </div>
          
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>

    

        <div class="row pr-4 pl-4">
        

        

        
        <table class="table ">
            <thead class="thead">
                <tr>
                <th scope="col" >Student ID</th>
                <th scope="col"> Name</th>
                <th scope="col">Class</th>
                <th scope="col">Grade</th>
                <th scope="col">Status</th>
                <th scope="col">Update</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $res=mysqli_query($con,"SELECT * FROM `student`");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                <tr>
                <th class="font"><?php echo $row["indexNo"]; ?></th>
                <th class="font"><?php echo $row["f_name_i"]; ?></th>
                <th class="font"><?php echo $row["class"]; ?></th>
                <th class="font"><?php echo $row["grade"]; ?></th>
                <th class="font"><?php echo $row["status"]; ?></th>
              
                <td>
                    <a href="edit_student.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Update</a>
                </td>
                
                </tr>




                <?php 
                }
                
                
                ?>
                
                
            </tbody>
        </table>
        
        </div>
</div>

      </div><!-- /.container-fluid -->
    </div>

    

<?php require_once('footer.php'); ?>