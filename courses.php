<?php
session_start();
include 'dbh.inc.php';
$course = mysqli_query($conn, "SELECT * FROM courses");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
   <link rel="stylesheet" href="HomPage.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <section class="home-section">

     
     
     <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
      <ul class="nav-area">
        <li><a class="fancy-text" href="index.php">Home</a></li>
        <li><a class="fancy-text" href="courses.php">Courses</a></li>
        <li><a class="fancy-text" href="About.php">About Us</a></li>
        <li><a class="fancy-text" href="Contact.php">Contact Us</a></li>
        <?php
        if (isset($_SESSION["uRole"])  && $_SESSION["uRole"]=="admin"){
            echo "<li><a class='fancy-text' href='adminHomePage.php'>Admin Page</a>";
            echo "<li><a class='fancy-text' href='logout.inc.php'>Log out</a>";
        }else if (isset($_SESSION["uRole"]) && $_SESSION["uRole"]=="student") {
          echo "<li><a class='fancy-text' href='studentHome.php'>Profile Page</a>";
          echo "<li><a class='fancy-text' href='logout.inc.php'>Log out</a>";
        }else{
          echo "<li><a class='fancy-text' href='mysite.php'>Login</a></li>";
        }
        ?>
        </ul>
      </nav>
    </div>

    <div>

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
