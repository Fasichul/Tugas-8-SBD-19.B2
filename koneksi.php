<?php
$host     = "localhost";
$user     = "root";
$password = "";
$database = "store_helmet";



$conn   = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
else #echo "Connected successfully";
?>