<?php
session_start();
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
           <a href="#" class="fancy-text">
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
           <a href="#" class="fancy-text">
             <i class='bx bxs-user-plus'></i>
             <span class="link_name"></span>
           </a>
         </li>
         <li>
           <a href="studentHome.php" class="fancy-text">
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
         <form action="register.inc.php" method="post">
           <table border="0" align="center">
             <tr>
               <td>course name</td>
               <td><input type="text" name="courseName" value="" class="in" autocomplete="off" required></td>
             </tr>
             <tr>
               <td>date</td>
               <td><input type="date" name="dateOfReg" value="" class="in" autocomplete="off" required></td>
             </tr>
           </table>
           <div style="align-text:center;">
             <button type="submit" name="submit" class="button2" >Register Course</button>
           </div>
       </form>
       </section>
   </body>
 </html>
