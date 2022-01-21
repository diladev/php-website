<?php
if (isset($_POST["submit"])) {

  $dep = $_POST["dep"];
  $tuition =$_POST["tuition"];
  $date =$_POST["date"];


  require_once 'dbh.inc.php';
  require_once 'function.inc.php';

  setTuition($conn, $dep, $tuition, $date);

}else{
  header("location: ./newAdduser.php");
  exit();
}
