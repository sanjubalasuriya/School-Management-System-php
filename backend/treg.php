<?php 

include ('../db/db.php');

$f_name = $_POST["f_name"];
$f_name_i = $_POST["f_name_i"];
$emp_id = $_POST["emp_id"];
$contact = $_POST["contact"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$gender = $_POST["gender"];
$nic = $_POST["nic"];
$subject = $_POST["subject"];
$address = $_POST["address"];
$status = $_POST["status"];

$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";



if(empty($f_name) || empty($f_name_i) || empty($emp_id) || empty($contact) || empty($emp_id) || empty($dob) || empty($gender) || empty($nic) || empty($subject) ||
empty($address)){

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
                      <b>  $f_name is not valid...!</b>
            </div>
        
        
        ";
    exit();

    }
    


    if(!preg_match($number,$contact)){
        echo "
        
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $contact is not valid...!</b>
            </div>
        
 ";
        exit();
    }
    

    if(!preg_match($emailValidation,$email)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $email is not valid...!</b>
            </div>
        
        
        ";
        exit();
    }
    

    if(!(strlen($contact) == 10)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Mobile number should be 10 digit...!</b>
            </div>
        
        
        ";
        exit();
    }



    $sql = "SELECT id FROM teacher WHERE emp_id = '$emp_id' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_emp = mysqli_num_rows($check_query);

    if($count_emp > 0){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  EMP id is already available try another...!</b>
            </div>
        
        ";
        exit();
    }
    else{
        $sql = "INSERT INTO `teacher` (`id`, `f_name`, `f_name_i`, `emp_id`, `contact`, `email`, `dob`, `gender`, `nic`, `subject`, `address`, `status`) 
        VALUES (NULL, '$f_name', '$f_name_i', '$emp_id', '$contact', '$email', '$dob', '$gender', '$nic', '$subject', '$address', '$status')";

       
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

        $sql2 = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$emp_id', md5('teacher@123'), 'teacher')";
        $run_query2 = mysqli_query($con,$sql2);

        
    }
    
}

    

    

?>