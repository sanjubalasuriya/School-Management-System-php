<?php include('security.php');
 require_once('header.php'); ?>

<?php include('db/db.php');?>

<script src="db/main.js"></script>

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

                </div>
                <div class="col-md-12 alert alert-success" id="success" style="display:none">
                    Parent Updated Successfully!...
                </div>
            </div>
            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input class="form-control" type="text" placeholder="Enter Full Name" name="pf_name"
                            id="pf_name" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            Full Name with Initial
                        </label>
                        <input class="form-control" type="text" placeholder="Enter Full Name with Initial"
                            name="pf_name_i" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">NIC</label>
                        <input class="form-control" type="text" placeholder="Enter Full Name" name="pnic" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            Contact
                        </label>
                        <input class="form-control" type="text" placeholder="Enter Contact" name="pcontact" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input class="form-control" type="email" placeholder="Enter Full Name" name="pemail" />

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">
                            Date of Birth
                        </label>
                        <input class="form-control" type="date" placeholder="" name="pdob" />

                    </div>
                </div>
            </div>

            <div class=" row ">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <select class="form-control" type="fullname" placeholder="Enter Full Name" name="pgender">
                            <option value="">Select...</option>
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
                        <input class="form-control" type="initialname" placeholder="Enter Full Name with Initial"
                            name="paddress" />

                    </div>
                </div>
            </div>





            <button type="submit" class="btn btn-primary" id="pregister" name="pregister">Submit</button>
            <a href="parents.php" class="btn btn-primary ">Back</a>
        </form>



    </div>
</div>



<?php require_once('footer.php'); ?>