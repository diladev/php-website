<?php
include 'dbh.inc.php';
$query="";
$result = mysqli_query($conn,'SELECT * FROM attendence');
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      body{
        background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);

      }
      .container{
        background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
        display:flex;
        flex-direction: row-reverse;
        justify-content:right;
        align-items:flex-start;
      }
    </style>
    <title></title>
  </head>
  <body>
    <div class="container">
      <form action="logout.inc.php" method="post">
        <div class=""><button class="item" type="submit" name="submit" style="
                background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
                display:flex;
                flex-direction: row-reverse;
                justify-content:right;
                align-items:flex-start;
                color:#fff;
                align-items:flex-end;
                padding: 20px 20px 20px 20px;
                margin-right: 20px;
                border: none;
                " >Log out</button>
        </div>
      </div>
    </form>

    <table align="center" border="1" style="width: 600px; line-height: 50px;">
      <tr>
        <th colspan="4" style="background-color: #282C34;"><h2>Students Absent Records</h2></th>
      </tr>
      <t>
        <th style="background-color:#56B6C2;">student id</th>
        <th style="background-color:#98C379;">course id</th>
        <th style="background-color:#E06C75;">was absent</th>
        <th style="background-color:#474C55;">the date</th>
      </t>
      <?php
      while ($rows=mysqli_fetch_assoc($result)) {
      ?>

      <tr>
        <td style="background-color:#56B6C2;"><?php echo $rows['s_id']; ?></td>
        <td style="background-color:#98C379;"><?php echo $rows['c_id']; ?></td>
        <td style="background-color:#E06C75;"><?php echo $rows['absent']; ?></td>
        <td style="background-color:#474C55;"><?php echo $rows['a_date']; ?></td>
      </tr>
      <?php
    }
      ?>
    </table>
  </body>
</html>
