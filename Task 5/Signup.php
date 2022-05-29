<?php

$con = mysqli_connect('localhost','root');
$db="demo";
mysqli_select_db($con,$db);


if(isset($_POST['done'])){
 
 $Fid = $_POST['Fid'];
 $FPass = $_POST['FPass'];
 $FName = $_POST['FName'];
 
 $q2="INSERT INTO `faculty`(`Faculty_ID`,`Fuser`, `Fpass`) VALUES ( '$Fid','$FName','$FPass' )";

$query3= mysqli_query($con,$q2);
 header('location:Faculty.php');
}
?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center"> Faculty Signup </h1>
 </div><br>

 <label> Faculty_ID: </label>
 <input type="text" name="Fid" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="FPass" class="form-control"> <br>

 <label> Faculty Name: </label>
 <input type="text" name="FName" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>