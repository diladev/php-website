<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $userrole = $_POST["role"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];

  require_once 'dbh.inc.php';
  require_once 'function.inc.php';

  if (emptyInoutSignup($name, $email, $username, $userrole, $pwd, $pwdRepeat) !== false) {
    header("location: ./newAdduser.php?error=emptyinput");
    exit();
  }

  if (invalidUid($username) !== false) {
    header("location: ./newAdduser.php?error=invaliduid");
    exit();
  }

/*
  if (invalidemail($email) !== false) {
   header("location: ./signup.php?error=invalidemail");
   exit();
  }
*/

  if (invalidrole($userrole) !== false) {
    header("location: ./newAdduser.php?error=invalidrole");
    exit();
  }


  if (pwdMatch($pwd,$pwdRepeat) !== false) {
    header("location: ./newAdduser.php?error=passwordsdontmatch");
    exit();
  }

  if (uidExists($conn,$username,$email)) {
    header("location: ./newAdduser.php?error=usernametaken");
    exit();
  }

  createUser($conn, $name, $email, $username, $userrole, $pwd);

}else{
  header("location: ./newAdduser.php");
  exit();
}
