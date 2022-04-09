<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');

$uname = $_SESSION['uname'];
$indexNo=$_GET["id"];


?>

<div class="container">
<?php 
         $res="SELECT * FROM `student` WHERE indexNo='{$indexNo}' and nic='{$uname}'";  

         $run_query = mysqli_query($con,$res);
         if($run_query){

         while($row=mysqli_fetch_array($run_query))
         {
             
        ?>
      <div class="container-fluid ">
<div class="border shadow p-4 m-4  fm">
      <div class="content-header ">
      <div class="container-fluid ">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0 ">Health Details</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="healthdetails.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary ">Register</a>
                
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
                <th scope="col">Title</th>
                <th scope="col">Details</th>
                <th scope="col">Update</th>
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $res=mysqli_query($con,"SELECT * FROM `health` WHERE indexNo= '$indexNo'");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                <tr>
                <th class="font"><?php echo $row["title"]; ?></th>
                <th class="font"><?php echo $row["info"]; ?></th>
                <td><a href="healthdetailsedit.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a></td>
                
                </tr>




                <?php 
                }
                
                
                ?>
                
                
            </tbody>
        </table>
        
        </div>
</div>

      </div><!-- /.container-fluid -->
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