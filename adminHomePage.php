<!DOCTYPE html>
<?php
include 'dbh.inc.php';
$query="";
$result = mysqli_query($conn,'SELECT * FROM attendence');
 ?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style media="screen">
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

      body{
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
      }

      .dynamic-txts{
        margin-left: 15px;
        height: 90px;
        line-height: 90px;
        overflow: hidden;
        color: white;
        font-size: 40px;
      }
      .dynamic-txts h2{
        position: relative;
        margin: 5px 0;
        line-height: 90px;
      }
      .dynamic-txts h2::after{
        content: "";
        position: absolute;
        left: 0;
        height: 100%;
        width: 100%;
        background: #BEDCE9;
        border-left: 2px solid #4F7F96;
        animation: typing 3s steps(10) infinite;
      }
      @keyframes typing {
        40%, 60%{
          left: calc(100% + 30px);
        }
        100%{
          left: 0;
        }
      }
    </style>
  </head>
  <body>
    <?php include_once 'AdminSideBar.php' ?>
    <section class="dynamic-txts">
      <h2>Welcom To Admin Page</h2>
    </section>
  </body>
</html>
