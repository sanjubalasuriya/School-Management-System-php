<?php
include('security.php');
include('db/db.php');

if(isset($_POST['login_btn'])){

    $uname = $_POST['uname'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM login WHERE uname='$uname' AND password='$password'";
    $query_run = mysqli_query($con, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['role'] == "admin"){

        $_SESSION['uname'] = $uname;
        header('Location: dashboard.php');

    }else if($usertypes['role'] == "teacher"){

        $_SESSION['uname'] = $uname;
        header('Location: teacher/dashboard.php');

    }else if($usertypes['role'] == "parent"){

        $_SESSION['uname'] = $uname;
        header('Location: parent/dashboard.php');

    }else if($usertypes['role'] == "student"){
        $_SESSION['uname'] = $uname;
        header('Location: student/dashboard.php');
    }
    
    
    else{
        $_SESSION['status'] = 'Username and password invalid';
        header('Location: login.php');
    }
}

?>