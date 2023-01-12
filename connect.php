<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "group66";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn,"utf8");
// Check connection
if (!$conn) {
  echo "<h1>Connection Fail</h1>" . mysqli_connect_error();
}
else{
    //echo "<h1>Connection Successful</h1>";
}
?>