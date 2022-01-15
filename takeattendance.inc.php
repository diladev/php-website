<?php
include 'dbh.inc.php';
$studentName = $_POST["studentName"];
$courseName = $_POST["courseName"];
$dateOfAbsent = $_POST["dateOfAbsent"];

$user = mysqli_query($conn, "SELECT usersId FROM users WHERE usersName = '$studentName'");
$course = mysqli_query($conn, "SELECT C_ID FROM courses WHERE course_name = '$courseName'");
$sIdR = mysqli_fetch_array($user);
$cIdR = mysqli_fetch_array($course);
$sId = $sIdR['usersId'];
$cId = $cIdR['C_ID'];
function takeabsent($conn,$sId,$cId,$dateOfAbsent){
  $sql = "INSERT INTO attendence (s_id, c_id, a_date) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./takeattendance.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "sss",$sId,$cId,$dateOfAbsent);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ./takeattendance.php?error=none");
exit();
}
takeabsent($conn,$sId,$cId,$dateOfAbsent);
