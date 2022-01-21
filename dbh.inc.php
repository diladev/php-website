<?php
$server_name = "sql11.freemysqlhosting.net";
$db_username = "sql11467206";
$db_password = "3ET6z2vksb";
$db_name = "sql11467206";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>
