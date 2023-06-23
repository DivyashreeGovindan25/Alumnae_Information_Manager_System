<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $contain_id=$_SESSION['idchk'];
   $staff_name=$_SESSION['staff_name'];
   $phone=$_SESSION['phone'];
   $email=$_SESSION['email'];
   $pwd=$_SESSION['pwd'];

   $name_upper=strtoupper($staff_name);
   $email_lower=strtolower($email);
   $pwd_upper=strtoupper($pwd);

   $sql="SELECT * FROM staff_details WHERE id='".$contain_id."' ";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)==1)
   {
      $sql1="SELECT * FROM staff_details WHERE id='".$contain_id."' ";
      $result1=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc($result1);

      $name_upper2=$row["name"];
      $email_lower2=$row["email"];
      $phone2=$row["phone"];    
      $pwd_upper2=$row["pwd"];

      if (empty($name_upper))
      {
        $name_upper=$name_upper2;
      }
      if (empty($email_lower))
      {
        $email_lower=$email_lower2;
      }
      if (empty($phone))
      {
        $phone=$phone2;
      }
      if (empty($pwd_upper))
      {
        $pwd_upper=$pwd_upper2;
      }
   }

   $sql2="SELECT * FROM staff_details WHERE id='".$contain_id."' ";
   $result2=mysqli_query($conn,$sql2);
   if (empty($contain_id)) 
   {
      header("Location:../Admin.Staff.php?selectedup=nil");
   }
   else
   {
     if (!empty($name_upper)||!empty($staff_id_upper)||!empty($email_lower)||!empty($phone)||!empty($pwd_upper))
   {
      if (!filter_var($email_lower, FILTER_VALIDATE_EMAIL))
        {
            header("Location:../Admin.Staff.php?Email=Invalid");
        }
        else
        {
           if(preg_match('/^[0-9]{10}+$/', $phone))
           {
             if(mysqli_num_rows($result2)==1)
             {
               $sql3="SELECT * FROM staff_details WHERE staff_id='".$staff_id_upper."' ";
               $result3=mysqli_query($conn,$sql3);
              if (mysqli_num_rows($result3)==0)
              {
                 $sql="UPDATE staff_details SET name='".$name_upper."', email='".$email_lower."' , phone='".$phone."' , pwd='".$pwd_upper."' WHERE id='".$contain_id."'   ";
                 $result=mysqli_query($conn,$sql);
                 header("Location:../Admin.Staff.php?Update=success");
              }
              else
              {
                 header("Location:../Admin.Staff.php?STAFF_ID=ALREADYEXIST");
              }
               
             }
             else
             {
                header("Location:../Admin.Staff.php?NOID=EXIST");
             }
           }
           else
           {
              header("Location:../Admin.Staff.php?phonenumber=Invalid");
           } 
        }
   }
   }
?>