<?php 

include ('../db/db.php');

$f_name = $_POST["f_name"];
$f_name_i = $_POST["f_name_i"];
$indexNo = $_POST["indexNo"];
$grade = $_POST["grade"];
$dob = $_POST["dob"];
$class = $_POST["class"];
$nic = $_POST["nic"];
$gender = $_POST["gender"];
$status = $_POST["status"];


$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";



if(empty($f_name) || empty($f_name_i)  || empty($indexNo)  || empty($grade) || empty($class) || empty($nic) || empty($gender) || 
empty($status)){

    echo "
            <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Fill All Fields...</b>
            </div>

    ";
    exit();
}
else{
    if(!preg_match($name,$f_name)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $pf_name is not valid...! Use upper case for first letter</b>
            </div>
        
        
        ";
    exit();

    }
    


    $sql = "SELECT id FROM student WHERE indexNo = '$indexNo' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_emp = mysqli_num_rows($check_query);

    if($count_emp > 0){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  NIC id is already exist try another...!</b>
            </div>
        
        ";
        exit();
    }
    else{
        $sql = "INSERT INTO `student` (`id`, `f_name`, `f_name_i`, `nic`, `indexNo`, `grade`, `class`, `dob`, `gender`, `status`)
         VALUES (NULL, '$f_name', '$f_name_i', '$nic', '$indexNo', '$grade', '$class', '$dob', '$gender', '$status');";

        //$sql = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$emp_id', 'sss', 'teacher')";
        $run_query = mysqli_query($con,$sql);
        if($run_query){
            
            ?>
            <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location="parents.php";
        },1000);       
    </script>
            <?php
        }
        $sql2 = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$indexNo', md5('student%123'), 'student')";
        $run_query2 = mysqli_query($con,$sql2);
    }
    
}

    

?>