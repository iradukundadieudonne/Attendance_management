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
    <a href="students.php">Student_R_cord</a>
    <a href="grades.php" style="text-decoration: 10px olive underline;">Grades_R_cord</a>
    <a href="logout.php">Logout</a>

    </div>
        </div>
   
        <div class="right">
        <center>
    <form action="" method="post">
           <h2>welcome on my form</h2>
        <input type="text" name="gradeid" placeholder="type_grade_id"  required><br><br>
        <input type="text" name="studentid" placeholder="type_student_id"  required><br><br>
        <input type="text" name="courseid" placeholder="type course_id"  required><br><br>
         da_te:<input type="date" name="examdate"><br><br>
       gra_de:<select name="grade" id="student G" aria-placeholder="type you grade here">
    <option value="A" name="grade">A</option>
    <option value="B" name="grade">B</option>
    <option value="C" name="grade">C</option>
    <option value="F" name="grade">F</option>
  </select size="60px"> <br><br>
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
    $gradeid=$_POST['gradeid'];
    $studentid=$_POST['studentid'];
    $courseid=$_POST['courseid'];
    $examdate=$_POST['examdate'];
    $grade=$_POST['grade'];
    $sel=mysqli_query($conn,"SELECT*FROM students WHERE studentid='$studentid'");
    $data=mysqli_fetch_assoc($sel);
    $select=mysqli_query($conn,"SELECT*FROM courses WHERE courseid='$courseid'");
    $fetch=mysqli_fetch_array($select);
    if(($courseid == $fetch['courseid']) && ($studentid == $data['studentid'])){
        mysqli_query($conn,"INSERT INTO grades() VALUES('$gradeid','$studentid','$courseid',NULL,'$grade')");
        echo" <script>alert('pass exam yourr have grade $grade')</script>";
    } 
    else{
        echo"<script>alert('failed to pass exam')</script>";
    }

    }

    ?>