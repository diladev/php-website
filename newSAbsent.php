<?php
include 'dbh.inc.php';
$query="";
$result = mysqli_query($conn,'SELECT * FROM attendence');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      body{
        margin: 0px 0px 0px 0px;
        background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
      }

.NavBar{
  height: 100%;
  width: 100%;
  margin-left: 0px;
  margin-top:0px;
}
.grid-NavBar{
  display: grid;
  grid-template-columns: 1fr 26fr;
  grid-template-rows: repeat(8,auto);
  grid-column-gap: 0px;
  grid-row-gap: 0px;
  grid-template-areas: "Admin Main"
                       "empty Main"
                       "Menu Main"
                       "Home Main"
                       "AbSheet Main"
                       "AddU Main"
                       "TakeA Main"
                       "AddC Main"
                       "logout Main"
}
.fancy-text{
  text-decoration:none;
  color:white;
  position:relative;
  font-family:sans-serif;
  font-weight:bold;
  font-size:20px;
}
.fancy-text:after{
  content: '';
  display: block;
  height: 5px;
  background-color: #585E63;
  position: absolute;
  left:0px;
  bottom:-8px;
  width: 0%;
  transition: all ease-in-out 250ms;
}
.fancy-text:hover::after{
  width: 100%;
}
.grid-item-1{
  grid-area:Main;
}
.grid-item-10{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:empty;
}
.grid-item-2{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:Admin;
}
.grid-item-3{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:Menu;
}
.grid-item-4{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:Home;
}
.grid-item-5{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:AddU;
}
.grid-item-6{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:TakeA;
}
.grid-item-7{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:AbSheet;
}
.grid-item-8{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:AddC;
}
.grid-item-9{
  background: linear-gradient(  to right, rgba(57,69, 81, 0.6),rgba(57,69, 81, 0.3));
  grid-area:logout;
  height: 100%;
}
i{
  height: 50px;
  min-width: 70px;
  text-align: center;
  line-height: 50px;
  color: #fff;
  font-size: 20px;
  cursor: pointer;
  font-size: 25px;

}

h2{
  color:white;
}

    </style>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  </head>
  <body>
    <div class="NavBar">
      <div class="grid-NavBar">
        <div class="grid-item grid-item-1">
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
        </div>
        <div class="grid-item grid-item-2">
            <i class='bx bxs-user' style="font-size: 36px; padding-top:5px;"></i>
        </div>
        <div class="grid-item grid-item-3">
          <a class="fancy-text" href="#" >
            <i class='bx bx-menu'></i>
          </a>
        </div>
        <div class="grid-item grid-item-4">
          <a class="fancy-text" href="#" >
            <i class='bx bx-home'></i>
          </a>
        </div>
        <div class="grid-item grid-item-5">
          <a class="fancy-text" href="#" >
            <i class='bx bxs-user-plus'></i>
          </a>
        </div>
        <div class="grid-item grid-item-6">
          <a class="fancy-text" href="#" >
            <i class='bx bxs-user-check' ></i>
          </a>
        </div>
        <div class="grid-item grid-item-7">
          <a class="fancy-text" href="#" >
            <i class='bx bx-task'></i>
          </a>
        </div>
        <div class="grid-item grid-item-8">
          <a class="fancy-text" href="#" >
            <i class='bx bxs-book-add' ></i>
          </a>
        </div>
        <div class="grid-item grid-item-9">
          <a class="fancy-text" href="#" >
            <i class='bx bx-log-out' ></i>
          </a>
        </div>
        <div class="grid-item grid-item-10">
        </div>
      </div>
    </div>
  </body>
</html>
