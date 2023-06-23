<?php
  if(isset($_POST["sendFb"]))
  {
      $conn=mysqli_connect('localhost','root','','phpdatabases');
      $email=$_POST['email'];
      $msg=$_POST['msg'];
      $sql="INSERT INTO  feedback (email,message) VALUES ('$email','$msg')  ";
      $result=mysqli_query($conn,$sql);
      header("Location:../Home.Main.php?feedbacksubitted");
   }
   else
   {
      echo "DB error";
   }
?>