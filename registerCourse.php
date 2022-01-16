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
     <style media="screen">

     .inStyle{
       color: white;
       padding-bottom: 20px;
       padding-top: 20px;
       left: 50%;
       transform: translate(-50%,-50%);
       width: 300px;
       border-radius: 25px;
       background: #4F7F96;
     }
     .hstyle{
       padding-bottom: 20px;
       text-align: center;
       color: white;
     }

     </style>
   </head>
   <body>
     <?php include_once 'studentSideBar.php' ?>
     <section class="home-section">
       <div class="inStyle" style="margin-top: 150px; margin-left:50%;">
         <form action="register.inc.php" method="post">
           <table align="center" border="0">
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
     </div>
    </section>
   </body>
 </html>
