<?php

session_start();

include('../db/db.php');

if(isset($_POST['msave'])){
    
   $indexNo = $_POST['indexNo'];
    $sub_id = $_POST['sub_id'];
    $grade = $_POST['grade'];
    $mark = $_POST['mark'];
    $sem = $_POST['sem'];

    
    foreach($sub_id as $index => $sub){

        $m_sub = $sub;
        $m_indexNo = $indexNo[$index];
        $m_grade = $grade[$index];
        $m_mark = $mark[$index];
        $m_sem = $sem[$index];

        $sql = "INSERT INTO `marks` (`id`, `indexNo`, `sub_id`, `mark`, `grade`, `sem`, `grade_id`) 
        VALUES (NULL, '$m_indexNo', '$m_sub', '$m_mark', '$m_grade', '$m_sem', '')";
        $run_query = mysqli_query($con,$sql);

        if($run_query){
            
            $_SESSION['status'] = "Succussfully";
            header("Location: students.php");
            exit(0);
        }
        
    }


        
    
}

?>