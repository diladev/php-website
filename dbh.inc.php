<?php
$server_name = "sql11.freemysqlhosting.net";
$db_username = "sql11466394";
$db_password = "sVdNbhl7WJ";
$db_name = "sql11466394";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>
