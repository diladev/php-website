<?php
session_start();
include 'dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM payment WHERE s_name = '".$_SESSION["usersUid"]."'");
$row=mysqli_fetch_assoc($result);
$paid = $row['paid'];
$tuition = $row['tuition'];
$date = $row['tuition_date'];

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style media="screen">

    .centerDiv{
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      background-color: #4F7F96;
      border: solid 30px #4F7F96;
      border-radius: 12px;
      color: white;
    }
    .hstyle{
      padding-bottom: 20px;
      text-align: center;
      color: white;
    }

    </style>
  </head>
  <body>
    <?php include_once 'studentSideBar.php' ?>
    <section class="home-section">
      <div class="centerDiv">
          <table align="center" border="0">
            <tr>
              <td><h1>Amout Need To Be Paid</h1></td>
              <td><?php if ($paid) {
                echo "<h1 style='color:green;'>you have alread psid your tuition</h1>";
              }else {
                echo "<h1 style='color:white;'>&nbsp&nbsp&nbsp" . $tuition . "$ </h1>";
              } ?></td>
            </tr>
            <tr>
              <td><h1>Payment Deadline</h1></td>
              <td><?php if ($paid) {
                echo "<h1>you will be updated soon for next payment</h1>";
              }else {
                echo "<h1 style='color:white;'>&nbsp&nbsp&nbsp" . $date . "</h1>";
              } ?></td>
            </tr>
            <tr>
              <?php
              $deadline = DateTime::createFromFormat("m.d.y", $date);
              if ($deadline >  date("m.d.y")){
                $passed =  date("m.d.y") - $deadline;
                echo "<h1 style='color:white;'>Days have " . (int)$passed . " passed since the deadline</h1>";
              }else{
                $passed = $deadline -  date("m.d.y");
                echo "<h1 style='color:white;'>Days " . (int)$passed*-1 . " left to pay</h1>";
              }
               ?>
            </tr>
          </table>
    </div>
   </section>
  </body>
</html>
