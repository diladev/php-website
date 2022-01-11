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
    <div class="flex-NavBar">
      <ul class="nav-links">
        <li>
          <a href="newAddcourse.php" class="fancy-text">
            <i class='bx bxs-book-add' ></i>
            <span class="link_name"></span>
          </a>
        </li>
        <li>
          <a href="newAbsent.php" class="fancy-text">
            <i class='bx bx-task'></i>
            <span class="link_name"></span>
          </a>
        </li>
        <li>
          <a href="newAdduser.php" class="fancy-text">
            <i class='bx bxs-user-plus'></i>
            <span class="link_name"></span>
          </a>
        </li>
        <li>
          <a href="newTake.php" class="fancy-text">
            <i class='bx bxs-user-check' ></i>
            <span class="link_name"></span>
          </a>
        </li>
        <li>
          <a href="adminHomePage.php" class="fancy-text">
            <i class='bx bx-home'></i>
            <span class="link_name"></span>
          </a>
        </li>
          <li>
            <a href="logout.inc.php" class="fancy-text">
              <i class='bx bx-log-out' ></i>
              <span class="link_name"></span>
            </a>
          </li>
  </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <table align="center" border="1" style="width: 600px; line-height: 50px;">
          <tr>
            <th colspan="4" style="background-color: #474C55; color: white;"><h2>Students Absent Records</h2></th>
          </tr>
          <t>
            <th style="background-color:#4F7F96; color:white;">student id</th>
            <th style="background-color:#4F7F96; color:white;">course id</th>
            <th style="background-color:#4F7F96; color:white;">the date</th>
          </t>
          <?php
          while ($rows=mysqli_fetch_assoc($result)) {
          ?>

          <tr>
            <td style="background-color:#4F7F96; color:white;"><?php echo $rows['s_id']; ?></td>
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
