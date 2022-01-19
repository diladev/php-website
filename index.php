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
        <li><a class="fancy-text" href="#">Courses</a></li>
        <li><a class="fancy-text" href="#">About Us</a></li>
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
      <div class="home-welcome-text">
        <h1 class="h1">Student Self-Managment</h1>

      </dive>
    </div>

  </body>
</html>
