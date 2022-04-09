<?php 

include ('../db/db.php');

$name = $_POST["uname"];
$password = md5($_POST["pass"]);








if(empty($name) || empty($password) ){

    echo "
            <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Fill All Fields...</b>
            </div>

    ";
    exit();
}
else{
    
    


    $sql = "SELECT id FROM login WHERE uname = '$name' LIMIT 1";
    $check_query = mysqli_query($con, $sql);
    $count_emp = mysqli_num_rows($check_query);

    if($count_emp > 0){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Subject ID id is already exist try another...!</b>
            </div>
        
        ";
        exit();
    }
    else{
        $sql = "INSERT INTO `login` (`id`, `uname`, `password`, `role`) VALUES (NULL, '$name', '$password', 'admin')";

        
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
        
    }
    
}

    

?>