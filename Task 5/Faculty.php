<?php 

session_start();
$host="localhost";
$user="root";
$password="";
$db="demo";

$link = mysqli_connect($host,$user,$password);
mysqli_select_db($link,$db);

if(isset($_POST['username'])){
  $uname=$_POST['username'];
  $password=$_POST['password'];
  
  $sql="select * from faculty where faculty.Faculty_ID='".$uname."'AND faculty.Fpass='".$password."' limit 1";
  
  $result=mysqli_query($link,$sql);
  if(mysqli_num_rows($result)==1){
    $_SESSION['username'] = $uname;
    header('location:./dashboard.php');
    echo "loggedin";  
    exit();
  }
  else{
      echo " You Have Entered Incorrect Password";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Stylesheet" href="./faculty.css">
    <title>Faculty Login</title>
</head>
<body>
    <div class="container">
    <div class="head"><h1>Faculty Login</h1></div>
    <div class="login-page">
    <div class="form">
    <form class="login-form"  method="POST" action="Faculty.php">
            <input type="text" placeholder="Faculty ID" name="username"/>
            <input type="password" placeholder="Password" name="password"/>
            <input type="submit" name="submit" value="LOGIN" class="button"></input>
            <p class="message"><a href="./Signup.php">Signup as Faculty or Staff ? </a></p>
</form>
</div>
</div>
</div>
</body>
</html>