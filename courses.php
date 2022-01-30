<?php
session_start();
include 'dbh.inc.php';
$course = mysqli_query($conn, "SELECT * FROM courses");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
    </style>
  </head>
  <body>
    <section class="home-section">


    <div class="centerDiv">

          <div class="home-content">
      <table align="center" border="1" style="margin-top: 0px;width: 600px; line-height: 50px;">
        <t>
          <th style="background-color:#4F7F96; color:white;">Course Name</th>
          <th style="background-color:#4F7F96; color:white;">Credit Hour</th>
        </t>
        <?php
        while ($rows=mysqli_fetch_array($course)) {
         
        ?>

        <tr>
          <td style="background-color:#4F7F96; color:white;"><?php echo $row['course_name']; ?></td>
          <td style="background-color:#4F7F96; color:white;"><?php echo $row['credit_hour']; ?></td>
        </tr>
        <?php
      }
        ?>
      </table>
    </div>
     
     
     
      </section>
  </body>
</html>
