<?php
if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'function.inc.php';
/*
  if (emptyInoutLogin($username, $pwd)) {
    header("location: ./mysite.php?error=emptyinput");
    exit();
  }
*/
loginUser($conn,$username, $pwd);
}
else{
  header("location: ./mysite.php");
  exit();
}
