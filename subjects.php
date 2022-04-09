
<?php include('security.php');
require_once('header.php'); ?>
<?php include('db/db.php');?>
<script src="db/main.js"></script>

<div class="content-header">
      <div class="container-fluid ">
<div class="border shadow p-4 m-1  fm">
      <div class="content-header ">
      <div class="container-fluid ">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0 ">Subjects</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="subject.php" class="btn btn-primary ">Register</a>
                
                </div>
                
          </div>
          
          
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>

        <div class="row pr-4 pl-4">
        

        

        
        <table class="table">
            <thead class="thead">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Subject Name</th>
                <th scope="col">Update</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $res=mysqli_query($con,"SELECT * FROM `subjectt`");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                <tr>
                <th class="font"><?php echo $row["sub_id"]; ?></th>
                <th class="font"><?php echo $row["sub_name"]; ?></th>
                <td><a href="edit_subject.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a></td>
                
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