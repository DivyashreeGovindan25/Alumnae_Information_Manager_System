<?php
   session_start();
   
   $id=$_SESSION["id"];

   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $sql="SELECT * FROM staff_details WHERE id='".$id."' ";
   $result=mysqli_query($conn,$sql);
   $row=mysqli_fetch_assoc($result);
   $staff_id=$row["staff_id"];
   $_SESSION["staff_id2"]=$staff_id;
   $name=$row["name"];
?>
<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"wrong=acc")==true)
   {
      echo "<script type='text/javascript'>
              alert('USER NAME OR OLD PASSWORD INCORRECT');
            </script>";
   }
?>
<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"no=acc")==true)
   {
      echo "<script type='text/javascript'>
              alert('YOUR STAFF ID IS INCORRECT');
            </script>";
   }
?>
<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"change=success")==true)
   {
      echo "<script type='text/javascript'>
              alert('PASSWORD CHANGED SUCCESSFULLY');
            </script>";
   }
?>
<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"pwd=same")==true)
   {
      echo "<script type='text/javascript'>
              alert('OLD AND NEW PASSWORD ARE SAME');
            </script>";
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Individual staff</title>
	<link rel="stylesheet" type="text/css" href="css/individual.staff.css">
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
</head>
<body>
	<div class="nav">
    <nav>
       <ul>
            <li><a href="postevent.php">POST EVENT</a></li>
            <li><a href="Staffmodule.php">ALUMNAE DETAILS</a></li>
            <li><a href="#" class="first-button" onclick="togglePopup()">RESET PASSWORD</a></li>
            <li><a href="Admin.Login.php">LOG OUT</a></li>
        </ul> 
       <h4>ALUMNAE INFORMATION</h4> 
    </nav> 
    </div>

    <div id="name">
    	<h1>Welcome</h1><h2><?php echo $name; ?></h2>
    </div>

    <div class="popup" id="popup-1">
      <div class="content">
        <div class="close-btn" onclick="togglePopup()">×</div>
           <form method="POST" action="php/resetpassword.php">
              <h1>RESET PASSWORD</h1> 
              <div class="input-field"><input type="text" name="staff_id" required placeholder="Enter staff ID"  class="validate"></div>
              <div class="input-field"><input type="text" name="old_pwd" required placeholder="Enter old password"  class="validate"></div>
              <div class="input-field"><input type="text" name="new_pwd" required placeholder="Enter new password"  class="validate"></div>
              <button type="submit" name="resetpwd" class="second-button">Reset</button>   
           </form>     
        </div>
      </div>

      <script>
         function togglePopup() 
         {
            document.getElementById("popup-1")
            .classList.toggle("active");
         }
      </script>
 
</body>
</html>