<!--newAdduser.php-->
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
     .hstyle{
       padding-bottom: 20px;
       text-align: center;
       color: white;
     }
     input.checkbox{
       width: 25px;
       height: 25px;
     }
    </style>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
    <?php include_once 'AdminSideBar.php' ?>
    <div class="centerDiv">
        <h1 class="hstyle">Paid Tuition</h1>
        <form action="MakeAsPaid.inc.php" method="post">
          <div class="form">
            <table border="0" align="center">
              <tr>
                <td>Matric</td>
                <td><input type="text" name="sId" value="" class="in" autocomplete="off" required></td>
              </tr>
              <tr>
                <td>Tuition Paid</td>
                <td><input type="checkbox" name="paid" value="1" class="checkbox" autocomplete="off" required></td>
              </tr>
            </table>
            <div style="align-text:center;">
              <button type="submit" name="submit" class="button" style="">SET AS PAID</button>
            </div>
          </div>
        </form>
    </div>
  </body>
</html>
