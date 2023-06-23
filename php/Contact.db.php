<?php
  if(isset($_POST["submit-contact"]))
  {
      $conn=mysqli_connect('localhost','root','','phpdatabases');
      $name=$_POST['name'];
      $reg_no=$_POST['reg_no'];
      $reg_no_upper=strtoupper($reg_no);
      $email=$_POST['email'];
      $msg=$_POST['message'];
      $sql="INSERT INTO  contact (name,reg_no,email,message) VALUES ('$name','$reg_no_upper','$email','$msg')  ";
      $result=mysqli_query($conn,$sql);
      header("Location:../Contact.Us.php?contact=submitted");
   }
   else
   {
      echo "DB error";
   }
?>