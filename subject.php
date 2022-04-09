<?php include('security.php');
require_once('header.php'); ?>

<?php include('db/db.php');?>
<script src="db/main.js"></script>

<?php 

$sql = "SELECT * FROM `subjectt` order by id desc limit 1";
$res = mysqli_query($con, $sql);
 $row = mysqli_fetch_array($res);
 $lastid = $row['sub_id'];

 if($lastid == " "){
   $sub_id = "SUB1";
 }else{
   $sub_id = substr($lastid,3);
   $sub_id = intval($sub_id);
   $sub_id = "SUB" . ($sub_id + 1);
 }

?>

<div class="content-header">
      <div class="container-fluid ">
        

        <form class="border shadow p-4 fm" method="post">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Subject</h1>
            <hr>
          </div><!-- /.col -->
          
        </div><!-- /.row -->

        <div class="row mb-2">
            <div class="col-md-12" id="sub_sign">
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                Subject added Successfully!
        </div>
          </div>
        <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Subject Id</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Subject Id"
                        name="sub_id"
                        id="f_name"
                        value="<?php echo $sub_id; ?>"
                        readonly
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Subject Name
                      </label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Subject Name"
                        name="sub_name"
                      />
                      
                    </div>
                  </div>
                </div>

        
        <button type="submit" class="btn btn-primary" id="sub_register" name="sub_register">Submit</button>
        <a href="subjects.php" class="btn btn-primary ">Back</a>
        </form>




        


      </div><!-- /.container-fluid -->
    </div>

    

<?php require_once('footer.php'); ?>