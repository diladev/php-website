<?php
include 'dbh.inc.php';
$courseName = $_POST["CN"];
$creditHour = $_POST["CH"];

function addCourse($conn,$courseName,$creditHour){
  $sql = "INSERT INTO courses (course_name, credit_hour) VALUES (?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ./newAddcourse.php?error=stmtfailed");
    exit();
}
mysqli_stmt_bind_param($stmt, "ss",$courseName,$creditHour);
mysqli_stmt_execute($stmt);
mysqli_stmt_close($stmt);
header("location: ./newAddcourse.php?error=none");
exit();
}
addCourse($conn,$courseName,$creditHour);
