
<?php
include('security.php');
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
            <h1 class="m-0 ">Teachers</h1>
            <hr>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="teacher.php" class="btn btn-primary ">Register</a>
                
                </div>
                
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

        <div class="row pr-4 pl-4">
        

        

        
        <table class="table ">
            <thead class="thead">
                <tr>
                <th scope="col" >EMP_ID</th>
                <th scope="col"> Name</th>
                <th scope="col">Email</th>
                <th scope="col">Contact</th>
                <th scope="col">Subject</th>
                <th scope="col">edit</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $res=mysqli_query($con,"SELECT * FROM `teacher`");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                <tr>
                <td class="font"><?php echo $row["emp_id"]; ?></td>
                <td class="font"><?php echo $row["f_name_i"]; ?></td>
                <td class="font"><?php echo $row["email"]; ?></td>
                <td class="font"><?php echo $row["contact"]; ?></td>
                <td class="font"><?php echo $row["subject"]; ?></td>
              
                <td><a href="edit_teacher.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a></td>
                
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