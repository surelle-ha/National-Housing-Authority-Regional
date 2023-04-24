<?php
    session_start();
    include "php/environment.php";
    include "php/init.php";
    include "php/iniParser.php";
    include "php/connection.php";
    include "php/notification.php";
    include "php/dataIn.php";
    include "php/login.php";
    include "php/employee.php";
    include "php/manageCart.php";

    /* USER VERIFY */
    if(isset($_SESSION['logged_status'])){
      header("location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login-style.css">
    <title>Login | National Housing Authority</title>
</head>
<body class="align">

    <div class="grid">
  
      <form method="POST" class="form login">
        <div class="form__field">
            <img style="border: 5px solid blue; border-radius: 50%; width: 156px; height: 160px; margin-left: auto; margin-right: auto; margin-bottom: 40px;" src="https://scontent.fmnl18-1.fna.fbcdn.net/v/t1.15752-9/251388057_897044520933745_4821668144666608954_n.png?_nc_cat=103&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeHjZRG2lGri8BNqfUYFe6tknXLyPJNedGCdcvI8k150YC6g_LJ59qMK-wyvGFxnHWoSrdvAdeq2U7PnIV-0P3fC&_nc_ohc=ilaoJncLRX4AX964hPD&_nc_ht=scontent.fmnl18-1.fna&oh=03_AdRg9qiPxu0lcNBw-FavuNMLnX8pzo8SIY7mJvYIDHVpVA&oe=645583A1" />
        </div>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("passwordChanged"); if(code == "1"){ document.write('<p style="padding: 10px; background-color: white; color:green;">Password has been changed.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("succ"); if(code == "501"){ document.write('<p style="padding: 10px; background-color: white; color:green;">Registered. Check your email address to verify your account.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("err"); if(code == "502"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Account not verified.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("succ"); if(code == "503"){ document.write('<p style="padding: 10px; background-color: white; color:green;">Account is now verified.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("err"); if(code == "403"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Incorrect Email or Password</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("err"); if(code == "401"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Server is down.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("err"); if(code == "404"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Account is blocked.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("err"); if(code == "333"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Invalid Captcha. Prove you\'re not a robot.</p>') } </script>
        <script> var url = new URL(window.location.href); var code = url.searchParams.get("maintenance"); if(code == "true"){ document.write('<p style="padding: 10px; background-color: white; color:red;">Portal is currently under maintenance</p>') } </script>
        <div class="form__field">
          <label for="login__username"><svg class="icon">
              <use xlink:href="#icon-user"></use>
            </svg><span class="hidden">Email</span></label>
          <input autocomplete="username" id="login__username" type="text" name="email" class="form__input" placeholder="Username" required>
        </div>
  
        <div class="form__field">
          <label for="login__password"><svg class="icon">
              <use xlink:href="#icon-lock"></use>
            </svg><span class="hidden">Password</span></label>
          <input id="login__password" type="password" name="password" class="form__input" placeholder="Password" required>
        </div>
  
        <div class="form__field">
          <input type="submit" name="login" value="Sign In">
        </div>
  
      </form>
  
      <p class="text--center">Not a member? <a href="register.php">Sign up now</a> <svg class="icon">
          <use xlink:href="#icon-arrow-right"></use>
        </svg></p>
  
    </div>
  
    <svg xmlns="http://www.w3.org/2000/svg" class="icons">
      <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
        <path d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
      </symbol>
      <symbol id="icon-lock" viewBox="0 0 1792 1792">
        <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
      </symbol>
      <symbol id="icon-user" viewBox="0 0 1792 1792">
        <path d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
      </symbol>
    </svg>
  
  </body>
</html>