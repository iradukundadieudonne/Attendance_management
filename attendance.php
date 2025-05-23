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
    <a href="courser.php" >Course Record</a>
    <a href="attendance.php" style="text-decoration:  10px olive underline;">Attendance R_cord</a>
    <a href="students.php">Student_R_cord</a>
    <a href="grades.php">Grades_R_cord</a>
    <a href="logout.php">Logout</a>

        </div>
    </div>
    <div class="right">
    <center>
    <form action="" method="post">
        <h2>welcome on my form</h2>
   <input type="text" name="attendanceid" placeholder="attendance_Id" required><br><br>
   <input type="text" name="studentid" placeholder="student_Id" required><br><br>
   <input type="text" name="courseid" placeholder="course_Id" required><br><br>
   <input type="date" name="attendancedate"><br><br>
  <select name="status" id="yes">
    <option value="yes" name="status">yes</option>
    <option value="no" name="status">no</option>
  </select size="60px"> <br><br>
   <button name="select">SUt_ATT</button>
</center>
</form>
    </div>
   </div>
  
<?php
include 'connection.php';
if(isset($_POST['select'])){
    $attendanceid=$_POST['attendanceid'];
    $studentid=$_POST['studentid'];
    $coursename=$_POST['coursename'];
    $attendancedate=$_POST['attendancedate'];
    $status=$_POST['status'];
    $select=mysqli_query($conn,"SELECT * FROM students  WHERE studentid='$studentid'");
    $fetch=mysqli_fetch_assoc($select);
    $sel=mysqli_query($conn,"SELECT * FROM courses WHERE coursename='$cousename'");
    $data=mysqli_fetch_array($select);
    if(($studentid == $fetch['studentid']) && ($courseid == $data['courseid'])){
        mysqli_query($conn,"INSERT INTO attendance() VALUES('$attendanceid','$studentid','$courseid',NULL,'$status')");
        echo"attendance success full";
    }
    else{
        echo"failed to get attendance".mysqli_error($conn);
    }
}
?>
</body>
</html>
