<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <form action="" method="post">
  <h2>welcome on my signup form</h2>
    <input type="text" name="username" placeholder="u_name" required><br>
    <input type="text" name="password" placeholder="p_user" required><br>
    <button name="save">signup</button>
  </form>  
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['save'])){
$username=$_POST['username'];
$password=$_POST['password'];
$insert=mysqli_query($conn,"INSERT INTO users() VALUES(NULL,'$username','$password')");
if($insert == true){
    header('location:index.php');
}
else{
    echo"failed to create any acount";
}
}
?>