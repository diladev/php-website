<?php
session_start();
include 'dbh.inc.php';
$studentName=$_SESSION["usersid"];
$courseName = $_POST["courseName"];
$creditHour = $_POST["dateOfReg"];

function addCourse($conn,$studentName,$courseName,$regDate){
  $sql = "INSERT INTO registration (s_id, c_id, Registration_Date) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./registerCourse.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "sss",$studentName,$courseName,$regDate);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ./registerCourse.php?error=none");
exit();
}
addCourse($conn,$courseName,$creditHour);
