<?php 

include('security.php');
require_once('header.php'); ?>

<?php include('db/db.php');


$id=$_GET["id"];
$f_name="";
$f_name_i="";
$contact="";
$email="";
$dob="";
$gender="";
$nic="";
$address="";


    


$res=mysqli_query($con,"SELECT * FROM `parent` WHERE id=$id");  
while($row=mysqli_fetch_array($res))
{
    
    $f_name=$row["f_name"];
    $f_name_i=$row["f_name_i"];
    $contact=$row["conatct"];
    $email=$row["email"];
    $dob=$row["dob"];
    $gender=$row["gender"];
    $nic=$row["nic"];
    $address=$row["address"];
    
}






?>

<div class="content-header">
      <div class="container-fluid fm">
        

        <form class="border shadow p-4" method="post">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Parent</h1>
            <hr>
          </div>
          
        </div>

        <div class="row mb-2">
            <div class="col-md-12" id="psign">
            <div class="alert alert-success" id="success" style="display:none" >
                Parent Updated Successfully!
        </div>
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
                        name="pf_name"
                        id="pf_name"
                        value="<?php echo $f_name;?>"
                        
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
                        name="pf_name_i"
                        value="<?php echo $f_name_i;?>"
                      />
                      
                    </div>
                  </div>
                </div>

                <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">NIC</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter Full Name"
                        name="pnic"
                        value="<?php echo $nic;?>"
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
                        name="pcontact"
                        value="<?php echo $contact;?>"
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
                        placeholder="Enter Full Name"
                        name="pemail"
                        value="<?php echo $email;?>"
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
                        name="pdob"
                        value="<?php echo $dob;?>"
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
                        name="pgender"
                        value="<?php echo $gender;?>"
                      >
                      <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                      <label class="form-label">
                        Address
                      </label>
                      <input
                      class="form-control"
                        type="initialname"
                        placeholder="Enter Address"
                        name="paddress"
                        value="<?php echo $address;?>"
                      />
                      
                    </div>
                  </div>
                </div>

                
                
                
        
        <button type="submit" class="btn btn-primary" id="pupdater" name="pupdater">Submit</button>
        <a href="parent.php" class="btn btn-primary ">Back</a>
        </form>


        


      </div>
    </div>

    <?php
if(isset($_POST["pupdater"]))

{
    mysqli_query($con,"UPDATE `parent` SET f_name='$_POST[pf_name]', f_name_i='$_POST[pf_name_i]',  conatct='$_POST[pcontact]', email='$_POST[pemail]', 
    dob='$_POST[pdob]', gender='$_POST[pgender]', nic='$_POST[pnic]', address='$_POST[paddress]' WHERE id=$id") or die(mysqli_error($con));  

    ?>
    <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
          window.location="parents.php";
        },1000);       
    </script>
    <?php
}

if(isset($_POST["submit2"])){
  
}

?>
    

<?php require_once('footer.php'); ?>