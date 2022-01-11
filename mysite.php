<?php session_start(); ?>
<!DOCTYPE html>
<!--Login System -->
<html lang="en" dir="ltr">

  <head>
    <meta charset="utf-8">
    <title>e-learning</title>
    <style type="text/css">
    h1{
        font-family: Arial,
            Helvetica, sans-serif;
        background: linear-gradient(
            to right, #0A8295, #0A8295, #F0F0F0, #F0F0F0);
        -webkit-text-fill-color: transparent;
        -webkit-background-clip: text;
    }
    input[type="submit"]{
      width:80%;
      border: 2px solid;
      margin-right: 50px;
      margin-bottom: 10px;
      background: #0A8295;
      color: silver;
      border-radius: 20px;
      font-size: 20;
      border-color: white;
      outline: none;
      cursor: pointer;
    }
    input[type="submit"]:hover{
      border-color: #12958C;
      transition: 0.4s;
    }
    body{
      margin: 0;
      padding: 0;
      background: linear-gradient(90deg,#F0F0F0,#5A96BE,#0A8295);
      overflow: hidden;
      height:50vh;
    }
    .inStyle h1{
      border-bottom: 1px solid silver;
      padding-bottom: 25px;
    }
    .inStyle{
      color: #0A8295;
      text-align: center;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      width: 500px;
      border-radius: 25px;
      background: linear-gradient( to right bottom, rgba(57,69, 81, 0.4),rgba(57,69, 81, 0.3));
    }
    .inStyle form{
      box-sizing: border-box;
      padding-left: 50px;
    }
    form .text-field {
      position: relative;
      margin-right: 50px;
      border-bottom: 2px solid #adadad;
      margin-bottom: 30px;
    }
    .text-field input{
      width:100%;
      padding: 0 5px;
      height:35px;
      font-size: 16;
      border: none;
      background:none;
      outline:none;
    }
    .text-field label{
      position: absolute;
      top:50%;
      left:5px;
      color: #adadad;
      transform: translateY(-50%);
      font-size: 16;
      pointer-events: none;
      transition: 0.4s;
    }
    .text-field span::before{
      content: '';
      position: absolute;
      top: 40px;
      left: 0px;
      width: 100%;
      height: 2px;

    }
    .text-field input:valid ~ label,.text-field input:focus ~ label{
      color: #004B93;
      top: -8px;
    }
    .forgot:hover{
      text-decoration: underline;
    }
    .forgot{
      margin: -5px 0px 10px 0px;
      color: silver;
      cursor: pointer;
    }

    </style>
  </head>

  <body><div class="inStyle">
    <h1>Login</h1>
    <form action="login.inc.php" method="post">
      <div class="text-field">
        <input type="text" name="uid" required>
        <label>User name</label>
      </div><br>
      <div class="text-field">
        <input type="password" name="pwd" required>
        <label>Password</label>
      </div><div class="forgot">Forgot Password?<div>
      <button type="submit" name="submit" style="margin-top:10px; margin-left: 0px;padding:10px 10px 10px 10px; border:3px; border-radius:20px; border-color:#5fa8d3; border-style: solid; font-size:22px;">Login</button>

    </form>
        </div>

    <script>
    </script>

    </body>
</html>
