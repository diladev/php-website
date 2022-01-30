<?php session_start();

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="HomPage.css">
  </head>
  <body>

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
       
    <div class="centerDiv" style="background:none; border: none;">

      <div class="hstyle">
        <h1 class="h1">Student Self-Managment</h1>

      </dive>
    </div>
    </div>

  </body>
</html>
