<?php 

include ('../db/db.php');

$pf_name = $_POST["pf_name"];
$pf_name_i = $_POST["pf_name_i"];
$pcontact = $_POST["pcontact"];
$pemail = $_POST["pemail"];
$pdob = $_POST["pdob"];
$pgender = $_POST["pgender"];
$pnic = $_POST["pnic"];
$paddress = $_POST["paddress"];

$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($pf_name) || empty($pf_name_i)  || empty($pcontact)  || empty($pdob) || empty($pgender) || empty($pnic) || empty($pemail) || 
empty($paddress)){

    echo "
            <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Fill All Fields...</b>
            </div>
    ";
    exit();
}
else{
    if(!preg_match($name,$pf_name)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $pf_name is not valid...! Use upper case for first letter</b>
            </div>
        
        ";
    exit();

    }
    if(!preg_match($number,$pcontact)){
        echo "
        
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $pcontact is not valid...!</b>
            </div>
        
 ";
        exit();
    }
    
    if(!preg_match($emailValidation,$pemail)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $pemail is not valid...!</b>
            </div>
        
        ";
        exit();
    }
    

    if(!(strlen($pcontact) == 10)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Mobile number should be 10 digit...!</b>
            </div>
        
        ";
        exit();
    }

    $sql = "SELECT id FROM parent WHERE nic = '$pnic' LIMIT 1";
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
        $sql = "INSERT INTO `parent` (`id`, `f_name`, `f_name_i`, `conatct`, `email`, `dob`, `gender`, `nic`, `address`) 
        VALUES (NULL, '$pf_name', '$pf_name_i', '$pcontact', '$pemail', '$pdob', '$pgender', '$pnic', '$paddress');";

        //$sql = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$emp_id', 'sss', 'teacher')";
        $run_query = mysqli_query($con,$sql);
        if($run_query){
            
            ?>
            <script type="text/javascript"> 
        document.getElementById("success").style.display="block";
        setTimeout(function(){
            window.location.href= window.location.href;
        },1000);       
    </script>
            <?php
        }

        $sql2 = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$pnic', md5('parent#123'), 'parent')";
        $run_query2 = mysqli_query($con,$sql2);
    }
    
}

    

?>