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
  
  $sql="select * from loginform where User='".$uname."'AND Pass='".$password."' limit 1";
  
  $result=mysqli_query($link,$sql);
  if(mysqli_num_rows($result)==1){
    $_SESSION['username'] = $uname;
    header('location:./result.php');
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
    <meta http-equiv="cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>Student Result Login</title>
</head>
<body>
<div class="nav"><div class="nav1"><ul>
  <li class="h1">Student Result Management Portal</li>
  <li><a class="a" href="login.php">Student</a></li>
  <li><a class="a" href="faculty.php">Faculty</a></li>
  <li><a class="a" href="Signup.php">Signup</a></li>
</ul></div></div>
<div class="container">

<div class="head"><h1>Student Result Login</h1></div>        
<div class="login-page">
    <div class="form"> 
          <form class="register-form">
            <input type="text" placeholder="name"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <button>create</button>
            <p class="message">Already registered? <a href="#">Sign In</a></p>
          </form>
          <form class="login-form" method="POST" action="login.php" >
            <input type="text" placeholder="username" name="username"/>
            <input type="password" placeholder="password" name="password"/>
            <input type="submit" name="submit" value="LOGIN" class="button" ></input>
            <p class="message">Faculty or Staff ? <a href="./Faculty.php">Login as Administrator</a></p>
          </form>
        </div>
      </div>
      
      
      
</body>
</html>