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
     <div class="flex-NavBar">
       <ul class="nav-links">
         <li>
           <a href="registerCourse.php" class="fancy-text">
             <i class='bx bxs-book-add' ></i>
             <span class="link_name"></span>
           </a>
         </li>
         <li>
           <a href="newRecord.php" class="fancy-text">
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
     <div class="home-content">
       <table align="center" border="1" style="margin-top: 0px;width: 600px; line-height: 50px;">
         <tr>
           <th colspan="3" style="background-color: #474C55; color: white;"><h2>My Absent Records</h2></th>
         </tr>
         <t>
           <th style="background-color:#4F7F96; color:white;">Course Name</th>
           <th style="background-color:#4F7F96; color:white;">Registration date</th>
           <th style="background-color:#4F7F96; color:white;">Credit Hour</th>
         </t>
         <?php
         while ($rows=mysqli_fetch_assoc($result)) {
          $G = $rows['c_id'];
          $course = mysqli_query($conn, "SELECT * FROM courses WHERE C_ID  = '$G'");
          $CNQ = mysqli_fetch_array($course);
          $CN = $CNQ['course_name'];
          $CH = $CNQ['credit_hour'];

         ?>

         <tr>
           <td style="background-color:#4F7F96; color:white;"><?php echo $CN; ?></td>
           <td style="background-color:#4F7F96; color:white;"><?php echo $rows['Registration_Date']; ?></td>
           <td style="background-color:#4F7F96; color:white;"><?php echo $CH; ?></td>
         </tr>
         <?php
       }
         ?>
       </table>
     </div>
       </section>
   </body>
 </html>

