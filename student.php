<?php include('security.php');
require_once('header.php'); ?>

<?php include('db/db.php');



$id=$_GET["id"];
$nic="";


$res=mysqli_query($con,"SELECT * FROM `parent` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    $nic=$row["nic"];
    
}

?>


<?php 

$sql = "SELECT * FROM `student` order by id desc limit 1";
$res = mysqli_query($con, $sql);
 $row = mysqli_fetch_array($res);
 $lastid = $row['indexNo'];

 if($lastid == " "){
   $indexNo = "STD1";
 }else{
   $indexNo = substr($lastid,3);
   $indexNo = intval($indexNo);
   $indexNo = "STD" . ($indexNo + 1);
 }

?>

<script src="db/main.js"></script>



<div class="content-header">
      <div class="container-fluid fm">
        

        <form class="border shadow p-4" method="post">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Student Register</h1>
            <hr>
          </div>
          <div class="col-sm-6">
            <div class="float-sm-right">
            <div class="form-group">
                      
                      <input
                        class="form-control"
                        type="text"
                        placeholder=""
                        name="nic"
                        id="nic"
                        value="<?php echo $nic;?>"
                        readonly
                        
                      />
                      
                    </div>
                      
                
                </div>
                
          </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12" id="stsign">
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                Student Submited Successfully!...
        </div>
          </div>
        <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Full Name</label>
                      <input
                        class="form-control"
                        type="text"
                        placeholder="Enter Full Name"
                        name="f_name"
                        id="f_name"
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Full Name with Initial
                      </label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Full Name with Initial"
                        name="f_name_i"
                      />
                      
                    </div>
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Index No</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder=""
                        name="indexNo"
                        value="<?php echo $indexNo ?>"
                        readonly
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">Grade</label>
                      <select
                      class="form-control"
                        type="fullname"
                        placeholder="Enter Full Name"
                        name="grade"
                      >
                      <option value="">Select...</option>
                      <option value="6">6</option>
                      <option value="7">7</option>
                      <option value="8">8</option>
                      <option value="9">9</option>
                      <option value="10">10</option>
                      <option value="11">11</option>
                      
                    </select>
                      
                    </div>
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">Class</label>
                      <select
                      class="form-control"
                        type="text"
                        placeholder="Enter Full Name"
                        name="class"
                      >
                      <option value="">Select...</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                    </select>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Date of Birth
                      </label>
                      <input
                      class="form-control"
                        type="date"
                        placeholder=""
                        name="dob"
                      />
                      
                    </div>
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Gender</label>
                      <select
                      class="form-control"
                        type="fullname"
                        placeholder="Enter Full Name"
                        name="gender"
                      >
                      <option value="">Select...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">Status</label>
                      <select
                      class="form-control"
                        type="fullname"
                        placeholder="Enter Full Name"
                        name="status"
                      >
                      <option value="">Select...</option>
                      <option value="Active">Active</option>
                      <option value="Deactive">Deactive</option>
                    </select>
                      
                    </div>
                  </div>
                </div>

                

                
        
        <button type="submit" class="btn btn-primary" id="stregister" name="stregister">Submit</button>
        <a href="parents.php" class="btn btn-primary ">Back</a>
        </form>



      </div>
    </div>

    

<?php require_once('footer.php'); ?>