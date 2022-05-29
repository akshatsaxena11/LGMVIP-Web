<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dashboard.css">
    <title>Faculty Dashboard</title>
</head>
<body>
    <div class="container">
        <div class="Fcontainer">
            <div class="head"><h1>Faculty Dashboard</h1></div>
            <div class ="head1"><p>Student Result Data</p></div>
 <br>
 <table  id="tabledata">
 <tr >
 <th>UserID</th>
 <th>Password</th>
 <th>Student Name</th>
 <th>English</th>
 <th>Maths</th>
 <th>Physics</th>
 <th>Chemistry</th>
 <th>Computer Science</th>
 <th>Delete</th>
 <th>Update</th>
 </tr >
 <?php
$con = mysqli_connect('localhost','root');
$db="demo";
mysqli_select_db($con,$db);

 $q = "select * from studentmarks ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['User'];  ?> </td>
 <td> <?php echo $res['Pass']; ?></td>
 <td> <?php echo $res['Name']; ?></td>
 <td> <?php echo $res['English'];  ?> </td>
 <td> <?php echo $res['Maths'];  ?> </td>
 <td> <?php echo $res['Physics'];  ?> </td>
 <td> <?php echo $res['Chemistry'];  ?> </td>
 <td> <?php echo $res['ComputerScience'];  ?> </td>
 <td> <button class="btndel"> <a href="delete.php?User=<?php echo $res['User']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btnupd"> <a href="update.php?User=<?php echo $res['User']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table> 
 <div class="Insert">
 <button class="btnin"><a href="./insert.php">Add Student Result</a></button>
 
 </div>
        </div>
    </div>
</body>
</html>