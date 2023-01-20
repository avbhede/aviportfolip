<?php
$servername = "localhost";
$username = "mymedwbq_avibhede";
$password = "Avi@2022";
$database= "mymedwbq_avibhede";
 
$connection = mysqli_connect($servername, $username, $password, $database);
 
if ($connection->connect_error) {
  die("Connection failed: " . $connection->connect_error);
}
// else
// {
//     echo "Connection established...";
// }

?>