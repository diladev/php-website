<?php

if (isset($_POST["submit"])) {

  $name = $_POST["name"];
  $name2 =$_POST["name"];
  $email = $_POST["email"];
  $username = $_POST["uid"];
  $username2 = $_POST["uid"];
  $userrole = $_POST["role"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdrepeat"];
  $dep = $_POST["dep"];


  require 'dbh.inc.php';
  require 'function.inc.php';
/*
  if (emptyInoutSignup($name, $email, $username, $userrole, $pwd, $pwdRepeat) !== false) {
    header("location: ./newAdduser.php?error=emptyinput");
    exit();
  }
*/
  if (invalidUid($username) !== false) {
    header("location: ./newAdduser.php?error=invaliduid");
    exit();
  }


  if (invalidemail($email) !== false) {
   header("location: ./newAdduser.php?error=invalidemail");
   exit();
  }


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

  createUser($conn, $name, $email, $username, $userrole, $pwd, $dep);
  InsertDep($conn, $username);

}else{
  header("location: ./newAdduser.php");
  exit();
}
