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
                            <h1 class="m-0 ">Parents</h1>
                            <hr>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <div class="float-sm-right">
                                <a href="parent.php" class="btn btn-primary ">Register</a>

                            </div>

                        </div>

                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>

            <div class="row pr-4 pl-4">





                <table class="table">
                    <thead class="thead">
                        <tr>
                            <th scope="col">NIC</th>
                            <th scope="col"> Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Contact</th>
                            <th scope="col">Address</th>
                            <th scope="col">Actions</th>


                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                $res=mysqli_query($con,"SELECT * FROM `parent`");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                        <tr>
                            <th class="font"><?php echo $row["nic"]; ?></th>
                            <th class="font"><?php echo $row["f_name_i"]; ?></th>
                            <th class="font"><?php echo $row["email"]; ?></th>
                            <th class="font"><?php echo $row["conatct"]; ?></th>
                            <th class="font"><?php echo $row["address"]; ?></th>


                            <td>
                                <a href="edit_parent.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Edit</a>
                                <a href="student.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary ">Add
                                    Student</a>
                                <a href="pstudents.php?id=<?php echo $row["nic"]; ?>"
                                    class="btn btn-primary ">Student</a>
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