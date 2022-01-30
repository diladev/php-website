<?php
$server_name = "sql11.freemysqlhosting.net";
$db_username = "sql11469235";
$db_password = "Z14JNIWlGy";
$db_name = "sql11469235";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>
