<?php
session_start();
include 'dbh.inc.php';

$studentId=$_SESSION["usersid"];
$courseName = $_POST["courseName"];
$regDate = $_POST["dateOfReg"];

$course = mysqli_query($conn, "SELECT C_ID FROM courses WHERE course_name = '$courseName'");
$cIdQ = mysqli_fetch_array($course);
$cId = $cIdQ['C_ID'];

function regCourse($conn,$studentId,$cId,$regDate){
  $sql = "INSERT INTO registration (s_id, c_id, Registration_Date) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./registerCourse.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "sss",$studentId,$cId,$regDate);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ./registerCourse.inc.php?error=none");
exit();
}

regCourse($conn,$studentId,$cId,$regDate);
