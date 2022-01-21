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
        <h1 class="hstyle">Login</h1>
        <form class="form"action="login.inc.php" method="post">
          <table border="0" align="center">
            <div class="form">
              <td>Matric or Email</td>
              <td class="form"><input type="text" name="uid"class="in" required>
              </td>
            </tr>
            </div>
            <div class="form">
              <tr>
                <td>User Password</td>
                <td class="form"><input type="password" name="pwd" class="in" required>
              </tr>
            </div>
          </table>
          <button type="submit" name="submit" class="button" style="">Login</button>
      </form>
    </div>
  </body>
</html>
