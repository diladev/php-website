<!--newAdduser.php-->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="NavBarStyle.css">
    <link rel="stylesheet" href="newAddUser.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  </head>
    <body>
      <?php include_once 'AdminSideBar.php' ?>
      <div class="inStyle">
        <h1 class="hstyle">Signup New User</h1>
        <form class="form" id="AddUserForm" action="signup.inc.php" method="post">
          <table border="0" align="center" class="form">
            <div class="form">
              <td>User Name</td>
              <td class="form"><input type="text" name="name"  id="name" class="in">
                <i class='bx bxs-check-circle' ></i>
                <i class='bx bxs-error-circle' ></i>
              </td>
            </tr>
            </div>
            <div class="form">
              <tr>
                <td>User email</td>
                <td class="form"><input type="text" name="email" class="in" id="email" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
              </tr>
            </div>
            <div class="">
              <tr>
                <td>User Matric</td>
                <td class="form"><input type="text" name="uid" class="in" id="uid" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
                </td>
              </tr>
            </div>
            <div class="">
              <tr>
                <td>Password</td>
                <td class="form"><input type="password" name="pwd" class="in" id="pwd" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
                </td>
              </tr>
            </div>
            <div class="">
              <tr>
                <td>Repeat Password</td>
                <td class="form"><input type="password" name="pwdrepeat" class="in"  id="pwdrepeat" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
                </td>
              </tr>
            </div>
            <div class="">
              <tr>
                <td>User Role</td>
                <td class="form"><input type="text" name="role" class="in"  id="role" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
                </td>
              </tr>
            </div>
            <div class="">
              <tr>
                <td>User Department</td>
                <td class="form"><input type="text" name="dep" class="in"  id="dep" autocomplete="off">
                  <i class='bx bxs-check-circle' ></i>
                  <i class='bx bxs-error-circle' ></i>
                </td>
              </tr>
            </div>
          </table>
          <div>
            <button type="submit" name="submit" class="button" style="">Add New User</button>
          </div>

      </form>
    </div>
    <script src="Interactive.js" charset="utf-8"></script>

  </body>
</html>
