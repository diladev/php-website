<?php ?>
<?php
session_start();
include 'dbh.inc.php';
$result = mysqli_query($conn,"SELECT * FROM attendence WHERE s_id = '".$_SESSION["usersid"]."'");
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
     <ul>
       <li>
         <div class="tooltip">
           <a href="studentHome.php" class="navTexT" >
             <i class='bx bxs-book-add' ></i>
             <span class="tooltiptext">Home</span>
           </a>
         </div>
       </li>
         <div class="tooltip">
           <li>
             <a href="newRecord.php" class="navTexT">
               <i class='bx bx-task'></i>
               <span class="tooltiptext ">Record</span>
             </a>
           </li>
         </div>
         <div class="tooltip">
           <li>
             <a href="#" class="navTexT">
               <i class='bx bxs-dollar-circle'></i>
               <span class="tooltiptext">Payment</span>
             </a>
           </li>
         </div>
         <div class="tooltip">
           <li>
             <a href="registerCourse.php" class="navTexT">
               <i class='bx bx-home'></i>
               <span class="tooltiptext">Register Course</span>
             </a>
           </li>
         </div>
         <div class="tooltip">
           <li>
             <a href="logout.inc.php" class="navTexT">
               <i class='bx bx-log-out' ></i>
               <span class="tooltiptext">Logout</span>
             </a>
           </li>
         </div>
       </ul>
    </div>

     <section class="home-section">
       <div class="home-content">
         <table align="center" border="1" style="width: 600px; line-height: 50px;">
           <tr>
             <th colspan="4" style="background-color: #474C55; color: white;"><h2>My Absent Records</h2></th>
           </tr>
           <t>
             <th style="background-color:#4F7F96; color:white;">course id</th>
             <th style="background-color:#4F7F96; color:white;">the date</th>
           </t>
           <?php
           while ($rows=mysqli_fetch_assoc($result)) {
           ?>

           <tr>
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
