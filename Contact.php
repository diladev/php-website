<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="ContactStyle.css">
    <link rel="stylesheet" href="HomPage.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
  </head>
  <body>
    <div class="container">
       <h1 class="logo"></h1>

       <nav>
         <ul>
       <ul class="nav-area">
         <li><a class="fancy-text" href="#">Courses</a></li>
         <li><a class="fancy-text" href="#">About Us</a></li>
         <li><a class="fancy-text" href="#">Contact Us</a></li>
         </ul>
       </nav>
     </div>
     <div class="centerDiv" style="background:none; border: none;">
       <div class="contact-section">
         <div class="contact-info">
           <div><i class="fas fa-map-marker-alt"></i>Raparin, Sulaymaniyah, Iraq</div>
           <div><i class="fas fa-envelope"></i>dilanbarham2@gmail.com</div>
           <div><i class="fas fa-phone"></i>+964 770 145 51 26</div>
           <div><i class="fas fa-clock"></i>Sa - Fri 10:00 AM to 2:00 PM</div>
         </div>
       <div class="contact-form">
         <h2>Contact Us</h2>
         <form class="contact" action="" method="post">
           <input type="text" name="name" class="text-box" placeholder="Your Name" required>
           <input type="email" name="email" class="text-box" placeholder="Your Email" required>
           <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
           <input type="submit" name="submit" class="send-btn" value="Send">
         </form>
       </div>

     </div>


    </div>
  </body>
</html>
