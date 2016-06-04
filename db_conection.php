<?php  
/** 
 * Created by PhpStorm. 
 * User: Ehtesham Mehmood 
 * Date: 11/21/2014 
 * Time: 1:13 AM 
 */

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
