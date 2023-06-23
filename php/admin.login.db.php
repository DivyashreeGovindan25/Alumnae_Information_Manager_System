<?php
     session_start();

  	 $un=$_SESSION["un"];
     $pw=$_SESSION["pwd"];
  	 $uname_upper=strtoupper($un);
     $pwd_upper=strtoupper($pw);
     if ($uname_upper=="ADMIN"&&$pwd_upper=="ADMIN") 
     {
     	header("Location:../admin.php");
     }
     else
     {
     	header("Location:../Admin.Login.php?login=failed");
     }
?>