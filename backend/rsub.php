<?php 

include ('../db/db.php');

$sub_id = $_POST["sub_id"];
$sub_name = $_POST["sub_name"];



$name = "/^[A-Z][a-zA-Z]+$/";




if(empty($sub_id) || empty($sub_name) ){

    echo "
            <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  Fill All Fields...</b>
            </div>

    ";
    exit();
}
else{
    if(!preg_match($name,$sub_name)){
        echo "
        <div class='alert alert-warning' role='alert'>
            <a href='' class='close' aria-label=''>&times;</a>
                      <b>  $sub_name is not valid...! Use upper case for first letter</b>
            </div>
        
        
        ";
    exit();

    }
    


    $sql = "SELECT id FROM subjectt WHERE sub_id = '$sub_id' LIMIT 1";
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
        $sql = "INSERT INTO `subjectt` (`id`, `sub_id`, `sub_name`) VALUES (NULL, '$sub_id', '$sub_name')";

        
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