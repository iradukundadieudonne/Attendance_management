<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<center>
    <h1>Welcome ON MY Stock_management</h1>
    </center>
    <div class="link">
        <div class="left">
            <div class="links">
 
    <a href="home.php">Home</a>
    <a href="courser.php" style="text-decoration: 10px olive underline;">Course Record</a>
    <a href="attendance.php">Attendance R_cord</a>
    <a href="students.php">Student_R_cord</a>
    <a href="grades.php">Grades_R_cord</a>
    <a href="logout.php">Logout</a>

    </div>
</div>
        <div class="light">
        <form action="" method="post">
        <h2>welcome on my form</h2>
        <input type="text" name="courseid" placeholder="id" required><br><br>
        <input type="text" name="coursename" placeholder="c_name" required><br><br>
        <input type="text" name="coursedescription" placeholder="d_p" required><br><br>
        <input type="text" name="duration" placeholder="duration" required ><br><br>
        <button name="send">send</button>
    </form>
        </div>
    </div>
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['send'])){
    $courseid=$_POST['courseid'];
    $coursename=$_POST['coursename'];
    $coursedescription=$_POST['coursedescription'];
    $duration=$_POST['duration'];
    $insert=mysqli_query($conn,"INSERT INTO courses() VALUES('$courseid','$coursename','$coursedescription','$duration')");
    if($insert){
        echo"successfull !!!";
    }
    else{
        echo"failed ";
    }
}
?>