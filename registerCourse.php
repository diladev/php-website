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
       <div class="centerDiv">
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
