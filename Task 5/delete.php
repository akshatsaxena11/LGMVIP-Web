<?php

$con = mysqli_connect('localhost','root');
$db="demo";
mysqli_select_db($con,$db);

$User = $_GET['User'];

$q = " DELETE FROM `studentmarks` WHERE User = '".$User."' ";

mysqli_query($con, $q);

header('location:dashboard.php');

?>