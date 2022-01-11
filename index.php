<?php session_start();

 ?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <style type="text/css">
    h1{
      text-transform: uppercase;
    }
    body {
	margin: 0;
	background: #222;
	font-family: 'Work Sans', sans-serif;
	font-weight: 800;
      background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
}

.container {
	width: 80%;
	margin: 0 auto;
}

header {
  background: #55d6aa;
}

header::after {
  content: '';
  display: table;
  clear: both;
}

.logo {
  float: left;
  padding: 10px 0;
}

nav {
  float: right;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

nav li {
  display: inline-block;
  margin-left: 70px;
  padding-top: 23px;

  position: relative;
}

nav a {
  color: #444;
  text-decoration: none;
  text-transform: uppercase;
  font-size: 14px;
}

nav a:hover {
  color: #000;
}

nav a::before {
  content: '';
  display: block;
  height: 5px;
  background-color: #444;

  position: absolute;
  top: 0;
  width: 0%;

  transition: all ease-in-out 250ms;
}

nav a:hover::before {
  width: 100%;
}
    .welcome-text{
      position: absolute;
      width: 800px;
      height: 300px;
      margin: 20% 30%;
      text-align: center;
background: linear-gradient( to right bottom, rgba(57,69, 81, 0.4),rgba(57,69, 81, 0.3));
      border-radius: 30px;

    }
    .welcome-text h1{
      text-align: center;
      color: white;
      text-transform: uppercase;
      font-size: 60px;
    }
    .welcome-text a{
      border: 1px solid white;
      padding: 10px 25px;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 14px;
      margin-top: 20px;
      display: inline-block;
    }
    </style>
  </head>
  <body>

   <div class="container">
      <h1 class="logo"></h1>

      <nav>
        <ul>
      <ul class="nav-area">
        <li><a href="#">Courses</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div>
      <div class="welcome-text">
        <h1 style=" font-size:50px;">Student Self-Managment</h1>
        <?php
        if (isset($_SESSION["uRole"])  && $_SESSION["uRole"]=="admin"){
            echo "<a href='adminHomePage.php' style='color: white; font-weight:bold;'>Admin Page</a>";
            echo "<a href='logout.inc.php' style='color: white; font-weight:bold;'>Log out</a>";
        }else if (isset($_SESSION["uRole"]) && $_SESSION["uRole"]=="student") {
          echo "<a href='studentHome.php' style='color: white; font-weight:bold;'>Profile Page</a>";
          echo "<a href='logout.inc.php' style='color: white; font-weight:bold;'>Log out</a>";
        }else{
          echo "<a href='mysite.php' style='color: white; font-weight:bold;'>Login</a>";
        }
        ?>
      </dive>
    </div>

  </body>
</html>
