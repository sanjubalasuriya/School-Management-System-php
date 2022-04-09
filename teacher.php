<?php include('security.php');
 require_once('header.php'); ?>
<?php include('db/db.php');?>
<script src="db/main.js"></script>


<?php 

$sql = "SELECT * FROM `teacher` order by id desc limit 1";
$res = mysqli_query($con, $sql);
 $row = mysqli_fetch_array($res);
 $lastid = $row['emp_id'];

 if($lastid == " "){
   $emp_id = "EMP1";
 }else{
   $emp_id = substr($lastid,3);
   $emp_id = intval($emp_id);
   $emp_id = "EMP" . ($emp_id + 1);
 }

?>



<div class="content-header">
      <div class="container-fluid ">
        

        <form class="border shadow p-4 fm" method="post">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Teacher</h1>
            <hr>
          </div>
        </div>

        <div class="row mb-2">
            <div class="col-md-12" id="tsign">
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                Supplier Updated Successfully!
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
                      <label class="form-label font">
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
                      <label class="form-label">Employee Id</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Full Name"
                        name="emp_id"
                        value="<?php echo $emp_id; ?>"
                        readonly
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Contact
                      </label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Contact"
                        name="contact"
                      />
                      
                    </div>
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Email</label>
                      <input
                      class="form-control"
                        type="email"
                        placeholder="Enter Email"
                        name="email"
                      />
                      
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
                        placeholder=""
                        name="gender"
                        value="<?php echo $gender;?>"
                      >
                      <option value="">Select...</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        NIC
                      </label>
                      <input
                      class="form-control"
                        type="initialname"
                        placeholder="Enter NIC"
                        name="nic"
                      />
                      
                    </div>
                  </div>
                </div>

                <?php 
                
                $sql = "SELECT * FROM `subjectt` ";
                $res = mysqli_query($con, $sql);
                
                ?>

                <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Subject</label>
                      <select
                      class="form-control"
                        type="fullname"
                        placeholder="Enter Full Name"
                        name="subject"
                        
                      >
                      <option value="">Select...</option>
                      <?php while($rows = mysqli_fetch_array($res)){
                          ?>
                          <option value="<?php echo $rows['sub_id']; ?>"><?php echo $rows['sub_id'] ?></option>
                        <?php

                      }?>
                      </select>
                  </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Status</label>
                      <select
                      class="form-control"
                        type="fullname"
                        placeholder=""
                        name="status"
                        value="<?php echo $status;?>"
                      >
                        <option value="">select</option>
                        <option value="Active">Active</option>
                        <option value="Deactive">Deactive</option>
                      </select>
                      
                    </div>
                    
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label ">
                        Address
                      </label>
                      <textarea
                      class="form-control"
                        type="initialname"
                        placeholder="Enter Address"
                        name="address"
                      ></textarea>
                      
                    </div>
                  </div>
                  
                </div>
        
        <button type="submit" class="btn btn-primary" id="tregister" name="tregister">Submit</button>
        <a href="teachers.php" class="btn btn-primary ">Back</a>
        </form>



        


      </div><!-- /.container-fluid -->
    </div>

    

<?php require_once('footer.php'); ?>