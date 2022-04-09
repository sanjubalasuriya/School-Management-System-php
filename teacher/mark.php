<?php include('security.php');
require_once('header.php');  

?>
<?php include('../db/db.php');


$id=$_GET["id"];
$indexNo="";
$grade="";


$res=mysqli_query($con,"SELECT * FROM `student` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $indexNo=$row["indexNo"];
    $grade=$row["grade"];
    
 
}

?>



<div class="table-container border shadow p-4 mt-4">
    <div class="row pt-4">
        <div class="col-sm-6">
            <h1 class="">Mark </h1>
        </div>

        <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="students.php" class="btn btn-primary ">Back</a>
            </div>
        </div>
    </div>
        
<hr>

<div class="row mb-2">
            <div class="col-12" >
            <?php
                

                if(isset($_SESSION['status'])){
                    echo"
                    <div class='alert alert-success'>
                    <h4>Success!</h4>
                    ".$_SESSION['status']."
                    </div>
                    ";
                    unset($_SESSION['status']);

                }
                ?>
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                Marks added Successfully!
        </div>
          </div>



<div class="row">

    <form action="" method="POST" class="col-md-12">

    <div>
      <table class="table" id="table_feild">
        <tr>
          <th>Student ID</th>
          <th>Grade</th>
          <th>semester</th>
          <th>Subject</th>
          <th>Marks</th>
          <th>Result</th>
          <th></th>
        </tr>
        
        <tr>
        <?php 
                
                $sql = "SELECT * FROM `subjectt` ";
                $res = mysqli_query($con, $sql);
                
                ?>
          <td><input type="text" name="indexNo[]" required="" class="form-control" value="<?php echo $indexNo;?>" readonly></td>
          <td><input type="text" name="grade[]" required="" class="form-control" value="<?php echo $grade;?>" readonly></td>
          <td><select name="sem[]" id="" class="form-control" required>
                          <option value="">Select</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                        </select></td>
          <td><select class="form-control" type="fullname"  name="sub_id[]" required >
                      <option value="">Select</option>
                      <?php while($rows = mysqli_fetch_array($res)){
                          ?>
                          <option value="<?php echo $rows['sub_id']; ?>"><?php echo $rows['sub_id'] ?></option>
                        <?php
                      }?> </select></td>
          <td><input type="text" name="mark[]" required="" class="form-control " ></td>
          <td><input type="text" name="grade_id[]" required="" class="form-control "  ></td>
          <td><input type="button" name="add" value="+" id="add" class="btn btn-primary"></td>
        </tr>
      </table>
      <center><input type="submit" name="save" id="save" class="btn btn-primary"></center>

    </div>

        
    </form>
</div>
</div>




<script type="text/javascript">
    $(document).ready(function(){
      <?php 
                $sql = "SELECT * FROM `subjectt` ";
                $res = mysqli_query($con, $sql);
                ?>

      var html = '<tr>\
      \
          <td><input type="text" name="indexNo[]" required="" class="form-control" value="<?php echo $indexNo;?>" readonly></td>\
          <td><input type="text" name="grade[]" required="" class="form-control" value="<?php echo $grade;?>" readonly></td>\
          <td><select name="sem[]" id="" class="form-control" required>\
                          <option value="">Select</option>\
                          <option value="1">1</option>\
                          <option value="2">2</option>\
                        </select></td>\
          <td><select class="form-control" type="fullname" placeholder="Enter Full Name" name="sub_id[]" required >\
                      <option value="">Select</option>\
                      <?php while($rows = mysqli_fetch_array($res)){
                          ?>
                          <option value="<?php echo $rows['sub_id']; ?>"><?php echo $rows['sub_id'] ?></option>\
                        <?php
                      }
                      ?>\
                      </select></td>\
          <td><input type="text" name="mark[]" required="" class="form-control mark"></td>\
          <td><input type="text" name="grade_id[]" required="" class="form-control"></td>\
          <td><input type="button" name="add" value="-" class="btn btn-danger" id="remove"></td>\
        </tr>';

        var x = 1;

        $("#add").click(function(){
            $("#table_feild").append(html);
        });

        $("#table_feild").on('click','#remove',function(){
            $(this).closest('tr').remove();
        });

      
    });

    
</script>


<?php

  if(isset($_POST['save'])){
    $indexNo = $_POST['indexNo'];
    $grade = $_POST['grade'];
    $sem = $_POST['sem'];
    $sub_id = $_POST['sub_id'];
    $mark = $_POST['mark'];
    $grade_id = $_POST['grade_id'];

    foreach($indexNo as $key => $value){
      $sql = "INSERT INTO `marks`( `indexNo`, `sub_id`, `mark`, `grade`, `sem`, `grade_id`) 
      VALUES ('".$value."', '".$sub_id[$key]."', '".$mark[$key]."', '".$grade[$key]."', '".$sem[$key]."', '".$grade_id[$key]."')";
      $run_query = mysqli_query($con,$sql);

      ?>
      
      <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="students.php";
        },1000);       
    </script>

    <?php
    };
    
    
  }


?>

<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<?php require_once('footer.php');  ?>