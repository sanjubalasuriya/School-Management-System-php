<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="shotcut icon" href="img/Logo..png" type="x-icon">
    <title>Login</title>
</head>
<?php
session_start();

?>

<body class="body">
<div class="container">
        <div class="row">
          
          <div class="">
            <div class="login border shadow">
              

              
              <div class="row al">
                <div class="col-sm-6">
                  <img src="login.jpg" alt="" class="jpg flex">
                </div>
                <div class="col-sm-6 second">
                <h1 class="d-flex justify-content-center mt-4">Login Here!</h1>
              <hr class="m-3" />
              <?php
              
              if(isset($_SESSION['status']) && $_SESSION['status'] !='')
              {
                echo '<div class="text-center"><p class="bg-danger text-white"> '.$_SESSION['status'].' </p></div>';
                unset($_SESSION['status']);
              }
              
              ?>

                <form action="loginn.php" class="pt-2 fm " method="POST">
                  <div>
                    <label for="exampleInputEmail1" class=" pb-3">
                      User Name
                    </label>
                    <input
                      type="text"
                      class="l form-control "
                      aria-describedby="emailHelp"
                      placeholder="Enter username"
                      name="uname"
                      autocomplete="off"
                    />
                  </div>
                  <div>
                    <label for="exampleInputEmail1" class=" pt-4 pb-3">
                      Password
                    </label>
                    <input
                      type="password"
                      class="l form-control"
                      aria-describedby="emailHelp"
                      placeholder="Enter password"
                      name="password"
                    />
                  </div>
                  <div class=" pt-5 gap-2">
                    
                      
                      <button
                        type="submit"
                        class="btn  d-flex  "
                        name="login_btn"
                        
                      >
                        Submit
                      </button>
                      
                      <a
                        type="submit"
                        class="  d-flex  b"
                        href="index.php"

                      ><i class="fas fa-arrow-left mr-4"></i>
                        Back to Home
                      </a>
                      
                    
               </div>
                </form>
                </div>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
    
</body>
</html>