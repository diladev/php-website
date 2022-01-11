<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      *{
        margin:0;
        padding:0;
        box-sizing: border-box;
      }
      .container{
        background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
        display:flex;
        flex-direction: row-reverse;
        justify-content:right;
        align-items:flex-start;
      }
      @keyframes gradient {
        0%{
          background-position:0% 50%;
        }
        50%{
          background-position:100% 50%;
        }
        100%{
          background-position:0% 50%;
        }
      }
      .container2{
        background: linear-gradient(-46deg,#F0F0F0,#5A96BE,#0A8295,#F0F0F0);
        background-size: 400% 400%;
        animation: gradient 15s ease infinite;

        display:flex;
        flex-direction: row-reverse;
        justify-content:right;
        align-items:flex-start;
        height: 903px;
      }

      .inStyle{
        float: left;
        color: #0A8295;
        text-align: left;
        padding-left: 150px;
        padding-bottom: 20px;
        padding-top: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        width: 500px;
        border-radius: 25px;
        background: linear-gradient( to right bottom, rgba(57,69, 81, 0.25),rgba(57,69, 81, 0.45));
      }
      .in{
        width: 200px;
        height: 50px;
        padding-top: 26px;
        padding-left: 3px;

        border:none;

      }
      .form label{
        position: absolute;
        left:30%;
        width: 200px;
        height:100px;
        pointer-events: none;
      }
      .form label::after{
        content: "";
        position: absolute;
        left: 30%;
        bottom: -1px;
        height: 100%;
        width: 100%;
        border-bottom: 3px solid #5fa8d3;
        transform: translate(-30%,-49%);
      }

      .content-name{
        position: absolute;
        bottom: 5px;
        left:0;
        transition: all 0.3s ease;
      }

      .form input:focus + .label-name .content-name{
        transform: translateY(-50%);
      }
      .item{
        color:#fff;
        align-items:flex-end;
        padding: 20px 20px 20px 20px;
        margin-right: 20px;
      }
      .item:hover{
        background-color: #5695BC;
      }
      .hstyle{
        padding-bottom: 20px;
        text-align: left;
        color: #5fa8d3;
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

    <div class="container2">
      <div class="inStyle">
        <h1 class="hstyle">Signup New User</h1>
        <form action="signup.inc.php" method="post"><div class="form">
        <label>User Name</label><input type="text" name="name" value="" class="in" autocomplete="off" required><br>
        </div>
        <div class="form">
        <label>User email</label><input type="text" name="email" value="" class="in" autocomplete="off" required><br>
        </div>
        <div class="form">
        <label>User ID</label><input type="text" name="uid" value="" class="in" autocomplete="off" required><br>
        </div>
        <div class="form">
        <label>Password</label><input type="password" name="pwd" value="" class="in" autocomplete="off" required><br>
        </div>
        <div class="form">
        <label>Repeat Password</label><input type="password" name="pwdrepeat" value="" class="in" autocomplete="off" required><br>
        </div>
        <div class="form">
        <label>User Role</label><input type="text" name="role" value="" class="in" autocomplete="off" required><br>
        <button type="submit" name="submit" style="margin-top:10px; margin-left: 55px;padding:10px 10px 10px 10px; border:3px; border-radius:20px; border-color:#5fa8d3; border-style: solid;">+ Add User</button>
      </form>
      </div>
    </div>

  </body>
</html>
