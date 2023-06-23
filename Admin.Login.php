<?php
    session_start();
?>
<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"login=failed")==true)
   {
      echo "<script type='text/javascript'>
              alert('LOGIN FAILED');
            </script>";
   }
?>
<?php
  $login="";
  if (isset($_REQUEST["login-btn"])) 
  {
      $username=$_POST["username"];
      $password=$_POST["password"];
      $login=$_POST["login-type"];
      if (empty($login))
      {
        echo "<script type='text/javascript'>
              alert('Please Select Login Type');
            </script>";
      }
      elseif(!empty($login))
      {
         if($login=="alumni") 
         {
             $_SESSION["un"]=$username;
             $_SESSION["pwd"]=$password;
             header("Location:./php/Alumnae.Login.db.php");
         }
         elseif ($login=="staff") 
         {
             $_SESSION["un"]=$username;
             $_SESSION["pwd"]=$password;
             header("Location:./php/staff.login.db.php");
         }
         elseif ($login=="admin") 
         {
             $_SESSION["un"]=$username;
             $_SESSION["pwd"]=$password;
             header("Location:./php/admin.login.db.php");
         }
      }
      

  }
?>
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
          background-color: #FF5733;
          color: black;
          width:300px;
          height: 40px;
          margin-left: 50px;
          margin-top: 8px;
          font-size: 20px;
          border-radius: 5px;
          font-style: bold;
          font-weight: 15px;
       }
  </style>
  <title>Admin Login Form</title>
</head>

<body>
<div class="body-wrapper">

  <div class="nav">
  <nav>
     <h1 id="alumnae">ALUMNAE INFORMATION MANAGEMENT SYSTEM</h1>
       <ul>
            <li><a href="index.php">Home</a></li>
        </ul> 
  </nav> 
  </div>

         <div class="wrapper">
            <form method="POST">

                <div class="head-div"><h1 class="heading-login">Login</h1></div><div class="underline_heading"></div>
                <div class="radio-container">
                         <input type="radio" id="alumni" name="login-type" checked value="alumni">
                         <label for="alumni">Alumnae</label>

                         <input type="radio" id="staff" name="login-type" value="staff">
                         <label for="staff">Staff</label>

                         <input type="radio" id="admin" name="login-type" value="admin">
                         <label for="admin">Admin</label>
                </div>
                  <?php
                      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl,"error=LoginFailed")==true)
                      {
                        echo "<div class='error'>Username and password is incorrect</div>";
                      }
                  ?>
                <span class="input-wrapper">
                <span class="inputbox">
                    <i class="fas fa-user"></i>
                    <div>
                      <input type="text" required name="username">
                      <span class="inputname">User Name</span>
                    </div>
                </span><br/>
                <span class="inputbox">
                    <i class="fas fa-lock"></i>
                    <div>
                      <input type="password" required name="password">
                      <span class="inputname">Pass Word</span>
                    </div>
                </span><br/>
                <button type="submit" class="submit" name="login-btn">Login</button><br>
                </span>

            </form>
         </div>

   </div>
</body>
</html>
