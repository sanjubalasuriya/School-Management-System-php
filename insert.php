<?php
include('security.php');
session_start();

    $server = "localhost";
    $username ="root";
    $password = "";
    $dbname ="school";

    $con =new mysqli($server,$username,$password,$dbname);

    if($con->connect_error){
        die("Connection faild" .$con->connect_error);
    }

    if(isset($_POST['indexNo'])){

        $indexNo = $_POST['indexNo'];
		$date = date('Y-m-d');
		$time = date('H:i:s');

        $sql = "SELECT * FROM student WHERE indexNo = '$indexNo' ";
        $query = $con->query( $sql);

        if($query->num_rows < 1){
			$_SESSION['error'] = 'Cannot find QRCode ';
		}else{
				$row = $query->fetch_assoc();
				$id = $row['indexNo'];
				$sql ="SELECT * FROM attendance WHERE indexNo='$id' AND logdate='$date' AND status='0'";
				$query=$con->query($sql);
				if($query->num_rows>0){
				$sql = "UPDATE attendance SET time_out='$time', status='1' WHERE indexNo='$indexNo' AND logdate='$date'";
				$query=$con->query($sql);
				$_SESSION['success'] = 'Successfuly Time Out: ';
			}else{
					$sql = "INSERT INTO attendance(indexNo,time_in,logdate,status) VALUES('$indexNo','$time','$date','0')";
					if($con->query($sql) ===TRUE){
					 $_SESSION['success'] = 'Successfuly Time In ';
			 }else{
			  $_SESSION['error'] = $con->error;
		   }	
		}
	}

    }else{
        $_SESSION['error'] = 'Please scan your QR Code number';
    }
    
    header("location: attendance.php");
    
    $con->close();


?>