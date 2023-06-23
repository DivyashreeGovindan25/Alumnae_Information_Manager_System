<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css\Login.css">
  <script src="https://kit.fontawesome.com/25d23bef2f.js" crossorigin="anonymous"></script>
  <style type="text/css"> 
    .error
       {
          background-color: #FFD2D2;
          color: black;
          width:350px;
          height: 40px;
          margin-left: 10px;
          margin-top: 10px;
          font-size: 15px;
          border-radius: 5px;
          text-align: center;
          justify-content: center;
          padding-top: 9px;
       }
  </style>
  <title>Staff Login</title>
</head>

<body>
<div class="body-wrapper">

  <div class="nav">
  <nav>
     <h1 id="alumnae">ALUMNAE INFORMATION MANAGEMENT SYSTEM</h1>
       <ul>
            <li><a href="Home.Main.php">Home</a></li>
            <li><a href="Alumnae.Login.php">Alumnae Login</a></li>
        </ul> 
  </nav> 
  </div>

         <div class="wrapper">
            <form method="POST" action="php\staff.login.db.php">
                <div class="head-div"><h1 class="heading-login">Staff Login</h1></div>
                  <?php
                      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl,"error=LoginFailed")==true)
                      {
                        echo "<div class='error'><h3>Username or password is incorrect</h3></div>";
                      }
                  ?>
                <span class="input-wrapper">
                <span class="inputbox">
                    <i class="fas fa-user"></i>
                    <div>
                      <input type="text" required name="username">
                      <span class="inputname">User Name (ID)</span>
                    </div>
                </span><br/>
                <span class="inputbox">
                    <i class="fas fa-lock"></i>
                    <div>
                      <input type="password" required name="password">
                      <span class="inputname">Pass Word (DD/MM/YYYY)</span>
                    </div>
                </span><br/>
                <button type="submit" class="submit" name="submit-staff">Login</button><br>
                </span>

            </form>
         </div>

   </div>
</body>
</html>


