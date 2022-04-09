<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');?>


<div class="table-container border shadow pb-4">
<div class="content-header">
<div class="container-fluid pt-4">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 ">Teachers</h1>
            
          </div><!-- /.col -->
          
          
        </div><!-- /.row -->
      </div>
    
    <hr>
        <form class="pt-2 pb-2 " action="" method="GET">
            <div class="form-group row ">
            <label for="inputEmail3" class="col-md-2 col-form-label ">Student ID</label>
            <div class="col-md-4">
            <input type="text" class="form-control" id="inputEmail3" placeholder="" name="indexNo" value="<?php if(isset($_GET['indexNo'])){ echo $_GET['indexNo']; } ?>">
            </div>
            
            </div>
            <div class="form-group row pt-2">
            <label for="inputEmail3" class="col-md-2 col-form-label ">DATE</label>
            <div class="col-md-4">
            <input type="date" class="form-control" id="inputEmail3" placeholder="" name="date" value="<?php if(isset($_GET['date'])){ echo $_GET['date']; } ?>">
            </div>
            
            </div>
            <div class="col-sm-6 pt-2">
            <input type="submit" class="btn btn-primary" id="inputEmail3" name="submit">
            <a href="attendance.php" class="btn btn-primary">Reset</a>
            </div>
        </form>
    <hr>

    <table class="tabl">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Time In</th>
                <th>Time Out</th>
                <th>Date</th>
                <th>Status</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
                                if(isset($_GET['date']) && isset($_GET['indexNo']))
                                {
                                    $date = $_GET['date'];
                                    $indexNo = $_GET['indexNo'];
                                    
                                    if($date != "" || $indexNo != ""){
                                        $query = "SELECT * FROM attendance WHERE logdate = '$date' OR indexNo = '$indexNo'";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['indexNo']; ?></td>
                                                <td><?= $row['time_in']; ?></td>
                                                <td><?= $row['time_out']; ?></td>
                                                <td><?= $row['logdate']; ?></td>
                                                <td><?= $row['status']; ?></td>
                                                
                                                <td><a href="edit_attendance.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a></td>
                                                
                                                
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="row col-12">
                                        <div class='alert alert-danger col-12' role='alert'>
                                        <a href='' class='close' aria-label=''>&times;</a>
                                        <center><b>  No Record Found</b></center>
                                                
                                        </div>
                                        </div>
                                        <?php
                                    }

                                    }

                                    
                                }else{
                                    
                                    

                                    $query = "SELECT * FROM attendance  ";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $row)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $row['indexNo']; ?></td>
                                                <td><?= $row['time_in']; ?></td>
                                                <td><?= $row['time_out']; ?></td>
                                                <td><?= $row['logdate']; ?></td>
                                                <td><?= $row['status']; ?></td>
                                                <td><a href="edit_attendance.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a></td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        ?>
                                        <div class="row col-12">
                                        <div class='alert alert-danger col-12' role='alert'>
                                        <a href='' class='close' aria-label=''>&times;</a>
                                        <center><b>   No Record Found</b></center>
                                                
                                        </div>
                                        </div>
                                        <?php
                                    }
                                }
                            ?>
            
        </tbody>
    </table>

</div>

<?php require_once('footer.php');  ?>