<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="post">
  <h2>welcome on my login form</h2>
    <input type="text" name="username" placeholder="u_name" required><br>
    <input type="text" name="password" placeholder="p_user" required><br>
    <button name="save">signup</button><br><br>
    <a href="signup.php">create acount</a>
  </form>  
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['save'])){
  
$username=$_POST['username'];
$password=$_POST['password'];
$select=mysqli_query($conn,"SELECT*FROM users WHERE username='$username' AND password='$password'");
if(mysqli_num_rows($select)){
  $_SESSION['username']=$username;
header('location:home.php');
}
else{
    echo"failed";
}
}
?>