<?php  


$user = 'root';
$password = 'root';
$db = 'users';
$host = 'localhost';
$port = 8889;

$dbcon = mysqli_connect(
   "$host:$port", 
   $user, 
   $password
);

mysqli_select_db($dbcon,"users");  
?>
?>
