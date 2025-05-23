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
    <a href="courser.php">Course Record</a>
    <a href="attendance.php">Attendance R_cord</a>
    <a href="students.php" style="text-decoration: 10px olive underline;">Student_R_cord</a>
    <a href="grades.php">Grades_R_cord</a>
    <a href="logout.php">Logout</a>

    </div>
    </div>

    <div class="right">
</center>
    <form action="" method="post">
    <h2>welcome on my form</h2>
        <input type="text" name="studentid" placeholder="id" required><br><br>
        <input type="text" name="fristname" placeholder="fristname" required><br><br>
        <input type="text" name="lastname" placeholder="lastname" required><br><br>
        <input type="text" name="gender" placeholder="gender" required ><br><br>
        <input type="date" name="dateofbirth"><br><br>
        <input type="number" name="contactnumber" placeholder="you number" required><br><br>
        <input type="email" name="email" placeholder="email" required><br><br>
        <input type="text" name="address" placeholder="address" required><br><br>
        <input type="date" name="enrollmentdate" ><br><br>
        <button name="send">send</button>
</center>
    </form>
    </div>
</div>
    
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['send'])){
    $studentid=$_POST['studentid'];
    $fristname=$_POST['fristname'];
    $lastname=$_POST['lastname'];
    $gender=$_POST['gender'];
    $dateofbirth=$_POST['dateofbirth'];
    $contactnumber=$_POST['contactnumber'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $enrollmentdate=$_POST['enrollmentdate'];
    $insert=mysqli_query($conn,"INSERT INTO students() VALUES('$studentid','$fristname','$lastname','$gender',NULL,'$contactnumber','$email','$address','$enrollmentdate')");
    if($insert){
        echo"student successfull !!!";
    }
    else{
        echo"failed ";
    }
}
?>