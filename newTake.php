<!DOCTYPE html>
<?php
include 'dbh.inc.php';
$query="";
$result = mysqli_query($conn,'SELECT * FROM attendence');
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style media="screen">
      .inStyle{
        float: left;
        color: white;
        text-align: left;
        padding-left: 0;
        padding-bottom: 20px;
        padding-top: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 300px;
        border-radius: 25px;
        background: #4F7F96;
      }
      .hstyle{
        padding-bottom: 20px;
        text-align: center;
        color: white;
      }
    </style>
  </head>
  <body>
   <?php include_once 'AdminSideBar.php' ?>
      <div class="container">
        <div class="container2">
          <div class="inStyle">
            <h1 class="hstyle">Take Attendence</h1>
            <form action="takeattendance.inc.php" method="post">
              <table border="0" align="center">
                <tr>
                  <td>student name</td>
                  <td><input type="text" name="studentName" value="" class="in" autocomplete="off" required></td>
                </tr>
                <tr>
                  <td>course name</td>
                  <td><input type="text" name="courseName" value="" class="in" autocomplete="off" required></td>
                </tr>
                <tr>
                  <td>date</td>
                  <td><input type="date" name="dateOfAbsent" value="" class="in" autocomplete="off" required></td>
                </tr>
              </table>
              <div style="align-text:center;">
                <button type="submit" name="submit" class="button2" >Take Absent</button>
              </div>
            </form>
        </div>
      </div>
  </body>
</html>
