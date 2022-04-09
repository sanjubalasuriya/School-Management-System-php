<?php include('security.php');
include('db/db.php');


require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

//                                              grade6

if(isset($_POST['grade6'])){

    $filename = "Grade 6".time();

    $query = "SELECT * FROM student WHERE grade='6'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        
        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//                                              grade6A

if(isset($_POST['grade6A'])){

    $filename = "Grade 6A".time();

    $query = "SELECT * FROM student WHERE grade='6' AND class='A'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//                                              grade6B

if(isset($_POST['grade6B'])){

    $filename = "Grade 6B".time();

    $query = "SELECT * FROM student WHERE grade='6' AND class='B'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }

}

//                                              grade6C

if(isset($_POST['grade6C'])){

    $filename = "Grade 6C".time();

    $query = "SELECT * FROM student WHERE grade='6' AND class='C'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//                                              grade6D

if(isset($_POST['grade6D'])){

    $filename = "Grade 6D".time();

    $query = "SELECT * FROM student WHERE grade='6' AND class='D'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//              -------------------------------------------    grade7

if(isset($_POST['grade7'])){

    $filename = "Grade 7".time();

    $query = "SELECT * FROM student WHERE grade='7' ";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//              -------------------------------------------    grade7A

if(isset($_POST['grade7A'])){

    $filename = "Grade 7A".time();

    $query = "SELECT * FROM student WHERE grade='7' AND class='A'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//              -------------------------------------------    grade7B

if(isset($_POST['grade7B'])){

    $filename = "Grade 7B".time();

    $query = "SELECT * FROM student WHERE grade='7' AND class='B'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');
        

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//              -------------------------------------------    grade7C

if(isset($_POST['grade7C'])){

    $filename = "Grade 7c".time();

    $query = "SELECT * FROM student WHERE grade='7' AND class='C'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

//              -------------------------------------------    grade7D

if(isset($_POST['grade7D'])){

    $filename = "Grade 7D".time();

    $query = "SELECT * FROM student WHERE grade='7' AND class='D'";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Index No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Class');
        $sheet->setCellValue('D1', 'Grade');
        $sheet->setCellValue('E1', 'Gender');
        $sheet->setCellValue('F1', 'Date of Birth');

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['indexNo']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['class']);
            $sheet->setCellValue('D' . $rowCount, $data['grade']);
            $sheet->setCellValue('E' . $rowCount, $data['gender']);
            $sheet->setCellValue('F' . $rowCount, $data['dob']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}


//              -------------------------------------------    grade7D

if(isset($_POST['teacher'])){

    $filename = "Teachers".time();

    $query = "SELECT * FROM teacher ";
    $query_run = mysqli_query($con, $query);

    if(mysqli_num_rows($query_run) > 0){

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        foreach (range('A', 'I') as $letra) {            
            $spreadsheet->getActiveSheet()->getColumnDimension($letra)->setAutoSize(true);
        }

        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('B1')->getFont()->setBold(true);
        $sheet->getStyle('C1')->getFont()->setBold(true);
        $sheet->getStyle('D1')->getFont()->setBold(true);
        $sheet->getStyle('E1')->getFont()->setBold(true);
        $sheet->getStyle('F1')->getFont()->setBold(true);
        $sheet->getStyle('G1')->getFont()->setBold(true);
        $sheet->getStyle('H1')->getFont()->setBold(true);
        $sheet->getStyle('I1')->getFont()->setBold(true);

        $sheet->setCellValue('A1', 'Employee No');
        $sheet->setCellValue('B1', 'Name');
        $sheet->setCellValue('C1', 'Contact');
        $sheet->setCellValue('D1', 'Email');
        $sheet->setCellValue('E1', 'Date of Birth');
        $sheet->setCellValue('F1', 'Gender');
        $sheet->setCellValue('G1', 'NIC');
        $sheet->setCellValue('H1', 'Subject');
        $sheet->setCellValue('I1', 'Address');
        

        $rowCount = 2;

        foreach($query_run as $data){

            $sheet->setCellValue('A' . $rowCount, $data['emp_id']);
            $sheet->setCellValue('B' . $rowCount, $data['f_name_i']);
            $sheet->setCellValue('C' . $rowCount, $data['contact']);
            $sheet->setCellValue('D' . $rowCount, $data['email']);
            $sheet->setCellValue('E' . $rowCount, $data['dob']);
            $sheet->setCellValue('F' . $rowCount, $data['gender']);
            $sheet->setCellValue('G' . $rowCount, $data['nic']);
            $sheet->setCellValue('H' . $rowCount, $data['subject']);
            $sheet->setCellValue('I' . $rowCount, $data['address']);
            $rowCount++;
        }
        

        $writer = new Xlsx($spreadsheet);
        $final_filename = $filename.'.xlsx';

        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-disposition: attachement; filename="'.urlencode($final_filename).'"');

        $writer->save('php://output');

        header("location: report.php");

    }

    else{

        $_SESSION['error'] = 'N0 Records';
    }


}

header("location: report.php");








?>