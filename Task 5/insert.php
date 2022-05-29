<?php

$con = mysqli_connect('localhost','root');
$db="demo";
mysqli_select_db($con,$db);


if(isset($_POST['done'])){
 
 $Name = $_POST['Name'];
 $Pass = $_POST['Pass'];
 $SName = $_POST['SName'];
 $English = $_POST['English'];
 $Maths = $_POST['Maths'];
 $Physics=$_POST['Physics'];
 $Chemistry=$_POST['Chemistry'];
 $ComputerScience =$_POST['ComputerScience'];
 $q = " INSERT INTO `studentmarks`(`User`,`Name`, `English`,`Maths`,`Physics`,`Chemistry`,`ComputerScience`,`Pass`) VALUES ( '$Name','$SName','$English','$Maths','$Physics','$Chemistry','$ComputerScience','$Pass' )";
 $q1="INSERT INTO `loginform`(`User`, `Pass`) VALUES ( '$Name','$Pass' )";

 $query = mysqli_query($con,$q);
$query2= mysqli_query($con,$q1);
 header('location:dashboard.php');
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
 <h1 class="text-white text-center"> Add Student Result </h1>
 </div><br>

 <label> UserID: </label>
 <input type="text" name="Name" class="form-control"> <br>

 <label> Password: </label>
 <input type="text" name="Pass" class="form-control"> <br>

 <label> Name: </label>
 <input type="text" name="SName" class="form-control"> <br>

 <label> English: </label>
 <input type="number" name="English" class="form-control"> <br>

 <label> Maths: </label>
 <input type="number" name="Maths" class="form-control"> <br>

 <label> Physics: </label>
 <input type="number" name="Physics" class="form-control"> <br>

 <label> Chemistry: </label>
 <input type="number" name="Chemistry" class="form-control"> <br>

 <label> Computer Science: </label>
 <input type="number" name="ComputerScience" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>