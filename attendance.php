<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/webrtc-adapter/3.3.3/adapter.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.1.10/vue.min.js"></script>
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="css/all.css">
    
    <title>Attendance</title>
</head>
<body>
<?php 
include('security.php');
include('db/db.php');


?>



    <div class="container">
    <div class="content-header">
      <div class="container-fluid">
          <div class="border shadow p-4 mt-5">
        <div class="row mb-2">
          <div class="col-sm ">
            <h1 class="m-0 ">Attendance</h1>
            
          </div>
          
        </div>
        <hr>
        <a href="dashboard.php" class="btn btn-primary mb-2">Back</a>
        <div class="row">
            
            <div class="col-md-6 " >
            <video id="preview" width="100%" ></video>
            <div class="alert alert-success" id="success" style="display:none" >
                Parent Updated Successfully!
        </div>
            <?php
                if(isset($_SESSION['error'])){
                    echo"
                    <div class='alert alert-danger'>
                    <h4>error!</h4>
                    ".$_SESSION['error']."
                    </div>
                    ";
                    unset($_SESSION['error']);
                }

                if(isset($_SESSION['success'])){
                    echo"
                    <div class='alert alert-success'>
                    <h4>Success!</h4>
                    ".$_SESSION['success']."
                    </div>
                    ";
                    unset($_SESSION['success']);

                }
                ?>
            </div>
            <div class="col-md-6">
                
                <i class="nav-icon fas fa-qrcode fa-9x "></i>
                <form action="insert.php" method="post" class="horizontal">
                <label for="">Scan Qr code</label>
                <input type="text" id="indexNo" name="indexNo" readonly="" class="form-control" >
                </form>
                
            </div>
        </div>
        </div>
      </div><!-- /.container-fluid -->
    </div>
    </div>

    

    <script>
           let scanner = new Instascan.Scanner({ video: document.getElementById('preview')});
           Instascan.Camera.getCameras().then(function(cameras){
               if(cameras.length > 0 ){
                   scanner.start(cameras[0]);
               } else{
                   alert('No cameras found');
               }

           }).catch(function(e) {
               console.error(e);
           });

           scanner.addListener('scan',function(c){
               document.getElementById('indexNo').value=c;
               document.forms[0].submit();
           });

        </script>
    
</body>
</html>




