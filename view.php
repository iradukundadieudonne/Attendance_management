<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    <div class="right">
    <table border="">
        <tr>
            <th>Attendance_id</th>
            <th>Student_Id</th>
            <th>Course_Id</th>
            <th>Date_of_Brith</th>
            <th>Status</th>
            <th colspan="2">Action</th>
        </tr>
        <?php
        include 'connection.php';
        $attendanceid=$_GET['attendanceid'];
        $select=mysqli_query($conn,"SELECT * FROM attendance");
        while($data=mysqli_fetch_array($select)){
            ?>
            <tr>
<td><?php echo $data['attendanceid']?></td>
<td><?php echo $data['studentid']?></td>
<td><?php echo $data['courseid']?></td>
<td><?php echo $data['attendancedate']?></td>
<td><?php echo $data['attendancestatus']?></td>
<td><button><a href="/delete/<?php echo $data['attendanceid']?>">delete</a></button></td>
<td><button><a href="/update/<?php echo $data['attendanceid']?>">update</a></button></td>
</tr>
            <?php
        }
        
        ?>

    </table>
    </div>
    </div>
    
</body>
</html>