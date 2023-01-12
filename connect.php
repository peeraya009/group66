<?php
$servername = "127.0.0.1";
$username = "it65309010009";
$password = "it65309010009";
$dbname = "it65309010009";

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