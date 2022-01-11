<?php
if (isset($_POST["submit"])) {
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];

require_once 'dbh.inc.php';
require_once 'function.inc.php';
echo "string";
  if (emptyInoutLogin($username, $pwd) !== false) {
    header("location: ./signup.php?error=emptyinput");
    exit();
  }
loginUser($conn,$username, $pwd);
}
else{
  echo "string";
  header("location: ./mysite.php");
  exit();
}
