<!-- MakeAsPaid.inc.php -->
<?php
if (isset($_POST["submit"])) {

  $sId = $_POST["sId"];
  $paid =$_POST["paid"];

  require_once 'dbh.inc.php';
  require_once 'function.inc.php';

  setToPaid($conn, $sId, $paid);
}else {
  header("location: ./MarkAsPaid.php?error=wrongUser");
  exit();
}
