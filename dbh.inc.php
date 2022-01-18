<?php
$server_name = "localhost";
$db_username = "id18257519_root";
$db_password = "xLdBrhDD8j%eTjlJ";
$db_name = "id18257519_login_db";

$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);

if(! $conn){
  die("connection failed:" .mysqli_connect_error());
}
?>
