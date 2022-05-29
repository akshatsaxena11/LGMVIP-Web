
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel ="Stylesheet" href="index2.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Result</title>
</head>
<body>
<div class="Table">
        <table>
        <tr><h1>Student Result Table</h1></tr> 
          <?php  
          session_start();
          $uname=$_SESSION['username'];
          $user = 'root';
 $password = '';
  
 // Database name is gfg
 $db = "demo";
  
 // Server is localhost with
 // port number 3308
 $host='localhost';
 $mysqli = new mysqli($host, $user,
                 $password, $db);
  
 // Checking for connections
 if ($mysqli->connect_error) {
     die('Connect Error (' .
     $mysqli->connect_errno . ') '.
     $mysqli->connect_error);
 }
  
 // SQL query to select data from database
 $sql = "select * from studentmarks where User = '".$uname."'";
 $result = $mysqli->query($sql);
 $mysqli->close();
 
 
 
  // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
             ?>
                <!--FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN-->
          <tr>
          <th>Name</th><td><?php echo $rows['User'];?></td></tr>
          <tr><th>English</th><td><?php echo $rows['English'];?></td></tr>
          <tr><th>Maths</th><td><?php echo $rows['Maths'];?></td></tr>
          <tr><th>Physics</th><td><?php echo $rows['Physics'];?></td></tr>
          <tr><th>Chemistry</th><td><?php echo $rows['Chemistry'];?></td></tr>
          <tr><th>Computer Science</th><td><?php echo $rows['ComputerScience'];?></td></tr>
            <?php
                }
                
              
             ?>
        </table>
      </div>

</div>
</body>
</html>