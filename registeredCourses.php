<?php
session_start();
include 'dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM registration WHERE s_id = '".$_SESSION["usersid"]."'");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <?php include_once 'studentSideBar.php' ?>
    <section class="home-section">
    <div class="home-content">
      <table align="center" border="1" style="margin-top: 0px;width: 600px; line-height: 50px;">
        <tr>
          <th colspan="3" style="background-color: #474C55; color: white;"><h2>My Courses</h2></th>
        </tr>
        <t>
          <th style="background-color:#4F7F96; color:white;">Course Name</th>
          <th style="background-color:#4F7F96; color:white;">Registration date</th>
          <th style="background-color:#4F7F96; color:white;">Credit Hour</th>
        </t>
        <?php
        while ($rows=mysqli_fetch_assoc($result)) {
         $G = $rows['c_id'];
         $course = mysqli_query($conn, "SELECT * FROM courses WHERE C_ID  = '$G'");
         $CNQ = mysqli_fetch_array($course);
         $CN = $CNQ['course_name'];
         $CH = $CNQ['credit_hour'];

        ?>

        <tr>
          <td style="background-color:#4F7F96; color:white;"><?php echo $CN; ?></td>
          <td style="background-color:#4F7F96; color:white;"><?php echo $rows['Registration_Date']; ?></td>
          <td style="background-color:#4F7F96; color:white;"><?php echo $CH; ?></td>
        </tr>
        <?php
      }
        ?>
      </table>
    </div>
      </section>
  </body>
</html>
