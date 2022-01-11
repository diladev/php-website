<?php
$server_name = "sql11.freemysqlhosting.net";
$db_username = "sql11464987";
$db_password = "X8rxn1uK4R";
$db_name = "sql11464987";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>
