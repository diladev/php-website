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
      table {
        border: 1px solid #CCC;
        border-collapse: collapse;
      }

      td {
        border: 1px solid #CCC;
      }
    </style>
  </head>
  <body>
    <?php include_once 'AdminSideBar.php' ?>
    <section class="home-section">
      <div class="home-content">
        <table align="center" border="1" style="width: 600px; line-height: 50px;">
          <tr>
            <th colspan="4" style="background-color: #474C55; color: white;"><h2>Students Absent Records</h2></th>
          </tr>
          <t>
            <th style="background-color:#4F7F96; color:white;">student Matric</th>
            <th style="background-color:#4F7F96; color:white;">course id</th>
            <th style="background-color:#4F7F96; color:white;">the date</th>
          </t>
          <?php
          while ($rows=mysqli_fetch_assoc($result)) {
            $runR = $rows['s_id'];
            $sqlR = mysqli_query($conn,"SELECT * FROM users WHERE usersId = $runR");
            $userNQ = mysqli_fetch_array($sqlR);
            $UserN = $userNQ['usersUid'];
          ?>

          <tr>
            <td style="background-color:#4F7F96; color:white;"><?php echo $UserN; ?></td>
            <td style="background-color:#4F7F96; color:white;"><?php echo $rows['c_id']; ?></td>
            <td style="background-color:#4F7F96; color:white;"><?php echo $rows['a_date']; ?></td>
          </tr>
          <?php
        }
          ?>
        </table>
      </section>
  </body>
</html>
