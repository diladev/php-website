<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="ContactStyle.css">
    <link rel="stylesheet" href="HomPage.css">
    <style media="screen">
      p:first-line{
        font-size: 40px;
      }
      p{
        font-size: 20px;
      }
      img {
        border-radius: 50%;
        width: 200px;
        height: auto;
        padding: 10;
      }
      .center {
    position: fixed;
    width: 500px;
    top: 80px;
    left: 500px;
  }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
    <div style="background:rgba(0, 0, 0, 0.9); left: 250px;top: 40px;padding:20px; border-radius:10px; position: relative; color: white;text-align:center;">
      <img src="https://drive.google.com/uc?id=14o4pu-wUfhG0U-rgptFOfShwG5zoe70F" alt=""><br>Dilan Barham <br>
      <img src="https://drive.google.com/uc?id=1gVs91dv9J6vlJiFEnHHaj1CSLC3ydGHI" alt=""><br>Carwan Hussein <br>
      <img src="https://drive.google.com/uc?id=1FdgH9s-esXbxY4qNdRTGRvw50uF6eL_A" alt=""><br>Mussa Sarkawt

    </div>


    <div class="container">
       <h1 class="logo"></h1>

       <nav>
         <ul>
       <ul class="nav-area">
        <li><a class="fancy-text" href="index.php">Home</a></li>
        <li><a class="fancy-text" href="#">Courses</a></li>
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
     <div class="center">
       <p style="font-size:30; background:rgba(0, 0, 0, 0.9); text-align:center; padding:20px; border-radius:10px; align:center; width:100%; color:white;">About Us
       <br><br>Not long ago, we were just students trying to live the normal
       college life, but suddenly discovering that the student life can be easier
       if thought into it more depth. What if you could be able to check your own attendance on a
       website wherever you are. Or pay for your installment whenever and wherever and also changing your payment
       plan all with a click of a button. Also registering for new courses that seems interesting and important
       for your major. This may sound like it is all useless, and you can do all of these jobs face to face,
       but time is money and by taking just seconds off a work that needed more time can save many.
       That is why we wish to start a new era and start our new year easier than ever.</p>
     </div>





    </div>
  </body>
</html>
