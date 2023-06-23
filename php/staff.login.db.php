<?php
  session_start();

  $conn=mysqli_connect('localhost','root','','phpdatabases');
  $un=$_SESSION["un"];
  $pw=$_SESSION["pwd"];
  $un_upper=strtoupper($un);
  $pwd=strtoupper($pw);
  
  $sql="SELECT * FROM staff_details WHERE staff_id='".$un_upper."' AND pwd='".$pwd."' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1)
  {
      $sql1="SELECT id FROM staff_details WHERE staff_id='".$un_upper."' AND pwd='".$pwd."' ";
      $result1=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc($result1);
      $id=$row["id"];
      $_SESSION["id"]=$id;
      header("Location:../individual.staff.php");
      exit();
  }
  else
  {
  	header("Location:../Admin.Login.php?login=failed");
  }

?>