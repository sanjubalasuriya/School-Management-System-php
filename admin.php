
<?php include('security.php');
require_once('header.php'); ?>

<script src="db/main.js"></script>

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
            <div class="col-md-12" id="admin_sign">
              
            </div>
            <div class="col-md-12 alert alert-success" id="success" style="display:none" >
                admin added Successfully!
        </div>
          </div>
        <div class=" row ">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">User name</label>
                      <input
                      class="form-control"
                        type="text"
                        placeholder="Enter username "
                        name="uname"
                        id="uname"
                        
                        
                        
                      />
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">
                        Password
                      </label>
                      <input
                      class="form-control"
                        type="password"
                        placeholder="Enter password "
                        name="pass"
                      />
                      
                    </div>
                  </div>
                </div>

        
        <button type="submit" class="btn btn-primary" id="admin_register" name="admin_register">Submit</button>
        <!-- <a href="subjects.php" class="btn btn-primary ">Back</a> -->
        </form>




        


      </div><!-- /.container-fluid -->
    </div>

    <?php require_once('footer.php'); ?>