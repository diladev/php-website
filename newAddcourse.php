<!--newAdduser.php-->
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <style media="screen">
    .inStyle{
      float: left;
      color: white;
      text-align: left;
      padding-left: 50px;
      padding-bottom: 20px;
      padding-top: 20px;
      position: absolute;
      top: 100px;
      left: 785px;

      width: 350px;
      border-radius: 25px;
      background: #4F7F96;
    }
    .in{
      width: 200px;
      padding-top: 26px;
      padding-left: 3px;
      border:none;

    }

    .item:hover{
      background-color: #5695BC;
    }
    .hstyle{
      padding-bottom: 20px;
      text-align: center;
      color: white;
    }
    </style>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <?php include_once 'studentSideBar.php' ?>
    <div class="inStyle">
        <h1 class="hstyle">Add Course</h1>
        <form action="newCourse.inc.php" method="post">
          <div class="form">
            <table border="0" align="center">
              <tr>
                <td>Course Name</td>
                <td><input type="text" name="CN" value="" class="in" autocomplete="off" required></td>
              </tr>
              <tr>
                <td>Credit Hour</td>
                <td><input type="text" name="CH" value="" class="in" autocomplete="off" required></td>
              </tr>
            </table>
            <div style="align-text:center;">
              <button type="submit" name="submit" class="button" style="">Add course</button>
            </div>
          </div>
        </form>
    </div>
  </body>
</html>
