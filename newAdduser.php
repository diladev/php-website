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
      <div class="flex-NavBar">
        <ul class="nav-links">
          <li>
            <a href="newAddcourse.php" class="fancy-text">
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
            <a href="newAdduser.php" class="fancy-text">
              <i class='bx bxs-user-plus'></i>
              <span class="link_name"></span>
            </a>
          </li>
          <li>
            <a href="newTake.php" class="fancy-text">
              <i class='bx bxs-user-check' ></i>
              <span class="link_name"></span>
            </a>
          </li>
          <li>
            <a href="adminHomePage.php" class="fancy-text">
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


      </section>
      <div class="inStyle">
        <h1 class="hstyle">Signup New User</h1>
        <form action="signup.inc.php" method="post"><div class="form">
          <table border="0" align="center">
            <tr>
              <td>User Name</td>
              <td><input type="text" name="name" value="" class="in" autocomplete="off" required></td>
            </tr>
            <tr>
              <td>User email</td>
              <td><input type="text" name="email" value="" class="in" autocomplete="off" required></td>
            </tr>
            <tr>
              <td>User ID</td>
              <td><input type="text" name="uid" value="" class="in" autocomplete="off" required></td>
            </tr>
            <tr>
              <td>Password</td>
              <td><input type="password" name="pwd" value="" class="in" autocomplete="off" required></td>
            </tr>
            <tr>
              <td>Repeat Password</td>
              <td><input type="password" name="pwdrepeat" value="" class="in" autocomplete="off" required></td>
            </tr>
            <tr>
              <td>User Role</td>
              <td><input type="text" name="role" value="" class="in" autocomplete="off" required><br></td>
            </tr>
          </table>
          <div style="align-text:center;">
            <button type="submit" name="submit" class="button" style="">Take Absent</button>
          </div>

      </form>
      </div>
    </div>


  </body>
</html>
