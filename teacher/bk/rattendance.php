<?php 

include ('../../db/db.php');

$indexNo = $_POST["indexNo"];
$time_in = $_POST["time_in"];
$time_out = $_POST["time_out"];
$logdate = $_POST["logdate"];
$status = $_POST["status"];



$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";



if(empty($indexNo) || empty($time_in)  || empty($time_out)  || empty($logdate) || empty($status) ){

    echo "
            <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Fill All Fields...</b>
            </div>

    ";
    exit();
}
else{
    
    
    
        $sql = "INSERT INTO `attendance` (`id`, `indexNo`, `time_in`, `time_out`, `logdate`, `status`) 
        VALUES (NULL, '$indexNo', '$time_in', '$time_out', '$logdate', '$status')";

        
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

    

?>