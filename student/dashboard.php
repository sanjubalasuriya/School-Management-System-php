<?php require_once('header.php');  ?>
<?php include('security.php'); 


 $uname = $_SESSION['uname'];
?>


<div class="container border shadow p-4 mt-4">
    <h1>Welcome Your Dashboard...<?php echo $uname; ?></h1>


    
</div>

<div class="container border shadow p-4 mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card" style="">
                <a href="attendance.php"><img class="card-img-top" src="att.jpg" alt="Card image cap"></a>
            <div class="card-body">
                <h1 class=""><b>Attendance</b></h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="attendance.php" class="btn btn-primary">Read More...</a>
            </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card" style="">
            <a href="result.php"><img class="card-img-top" src="rs.jpg" alt="Card image cap" ></a>
            <div class="card-body">
                <h1 class=""><b>Result</b></h1>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="result.php" class="btn btn-primary">Read More...</a>
            </div>
            </div>
        </div>

    </div>

    
    
</div>

<?php require_once('footer.php');  ?>