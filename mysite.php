<?php session_start(); ?>
<!DOCTYPE html>

<!--newAdduser.php-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="newAddUser.css">
    <link rel="stylesheet" href="NavBarStyle.css">
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
    </style>

  </head>
    <body>
      <div class="centerDiv">
        <h1 class="hstyle">Signup New User</h1>
        <form class="form"action="login.inc.php" method="post">
          <table border="0" align="center">
            <div class="form">
              <td>User Name</td>
              <td class="form"><input type="text" name="uid"class="in" required>
              </td>
            </tr>
            </div>
            <div class="form">
              <tr>
                <td>User email</td>
                <td class="form"><input type="password" name="pwd" class="in" required>
              </tr>
            </div>
          </table>
          <div class="">
            <button type="submit" name="submit" class="button" style="">Add New User</button>
          </div>
      </form>
    </div>
  </body>
</html>
