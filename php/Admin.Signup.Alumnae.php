<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');

   $name=$_SESSION['name'];
   $reg_no=$_SESSION['reg_no'];
   $batch_id=$_SESSION['batch_id'];
   //$phone=$_SESSION['phone'];
   $email=$_SESSION['email'];
   //$address=$_SESSION['address'];
   $dob=$_SESSION['dob'];

   $name_upper=strtoupper($name);
   $batch_id_upper=strtoupper($batch_id);
   $reg_no_upper=strtoupper($reg_no);
   $email_lower=strtolower($email);
   if (empty($batch_id_upper) && empty($reg_no_upper) && empty($dob)) 
   {
   	  if (!empty($name_upper)&&!empty($email_lower))
   	  {
          $sql="SELECT * FROM alumnae_signup WHERE reg_no='".$email_lower."' ";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)==0)
          {
              $sql="INSERT INTO  alumnae_signup (name,batch_id,reg_no) VALUES ('$name_upper','null','$email_lower')  ";
              $result=mysqli_query($conn,$sql);
              header("Location:../Admin.Alumnae.php?signup=success");
              exit();
          }
          else
          {
          	  header("Location:../Admin.Alumnae.php?Signup=failed");
          }
   	  }
      else
      {
         header("Location:../Admin.Alumnae.php");
      }
   }
   else
   {
   	  if (!empty($name_upper)&&!empty($reg_no_upper)&&!empty($batch_id_upper)&&!empty($dob))
   	  {
           $sql="SELECT * FROM alumnae_signup WHERE reg_no='".$reg_no_upper."' ";
           $result=mysqli_query($conn,$sql);
           if(mysqli_num_rows($result)==0)
           {
              $sql="INSERT INTO  alumnae_signup (name,batch_id,reg_no,date_of_birth) VALUES ('$name_upper','$batch_id_upper','$reg_no_upper','$dob')  ";
              $result=mysqli_query($conn,$sql);
              header("Location:../Admin.Alumnae.php?signup=success");
              exit();
           }
           else
           {
              header("Location:../Admin.Alumnae.php?Signup=failed");
           }
   	  }
   }

?>