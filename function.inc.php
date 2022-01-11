<?php

include 'dbh.inc.php';

function emptyInoutSignup($name, $email, $username, $userrole, $pwd, $pwdRepeat){
  $result;
  if(empty($name)||empty($email)||empty($username)||empty($userrole)||empty($pwd)||empty($pwdRepeat)){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}

function invalidUid($username){
  $result;
  if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
    $result = true;
  }else{
    $result = false;
  }
return $result;
}

function invalidrole($userrole){
  $result;
  if ($userrole =="student" || $userrole =="admin") {
    $result = false;
  }else {
    $result = true;
  }
return $result;
}

function invalidemail($email){
  $result;
  if(!filter_val($email, FILTER_VALIDATE_EMAIL)){
    $result = true;
  }else{
    $result = false;
  }
return $result;
}

function pwdMatch($pwd,$pwdRepeat){
  $result;
  if($pwd !== $pwdRepeat){
    $result = true;
  }else{
    $result = false;
  }
return $result;
}

function uidExists($conn,$username,$email){
  $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./signup.php?error=stmtfailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "ss",$username,$email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }else{
    $result =false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}


function createUser($conn, $name, $email, $username, $userrole, $pwd){
  $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd, usersRole) VALUES (?, ?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./signup.php?error=stmtfailed");
    exit();
  }

  $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "sssss",$name, $email, $username, $hashedPwd, $userrole);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ./signup.php?error=none");
  exit();

}

function emptyInoutLogin($username, $pwd){
  $result;
  if(empty($username)||empty($pwd)){
    $result = true;
  }else{
    $result = false;
  }
  return $result;
}

function loginUser($conn,$username, $pwd){
  $uidExists = uidExists($conn,$username,$username);
  if ($uidExists == false) {
    header("location: ./mysite.php?error=wronglogin");
    exit();
  }
  $pwdHashed = $uidExists["usersPwd"];
  $checkPwd = password_verify($pwd,$pwdHashed);

  if ($pwdHashed == false) {
    header("location: ./mysite.php?error=wronglogin");
    exit();
  }

  else if ($checkPwd == true){
    session_start();
    $_SESSION["usersid"] = $uidExists["usersId"];
    $_SESSION["usersUid"] = $uidExists["usersUid"];
    $_SESSION["uRole"] = $uidExists["usersRole"];
    header("location: ./homepagr.php");
    exit();
  }
}
