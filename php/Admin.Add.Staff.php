<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $staff_name=$_SESSION['staff_name'];
   $phone=$_SESSION['phone'];
   $email=$_SESSION['email'];
   $staff_id=$_SESSION['staff_id'];
   $pwd=$_SESSION['pwd'];
   
   $name_upper=strtoupper($staff_name);
   $staff_id_upper=strtoupper($staff_id);
   $pwd_upper=strtoupper($pwd);
   $email_lower=strtolower($email);
   $sql="SELECT * FROM staff_details WHERE staff_id='".$staff_id_upper."' ";
   $result=mysqli_query($conn,$sql);
   if (!empty($name_upper)||!empty($staff_id_upper)||!empty($email_lower)||!empty($phone)||!empty($dob))
   {
      if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            header("Location:../Admin.Staff.php?Email=Invalid");
        }
        else
        {
           if(preg_match('/^[0-9]{10}+$/', $phone))
           {
             if(mysqli_num_rows($result)==0)
             {
               $sql="INSERT INTO  staff_details (name,staff_id,pwd,email,phone) VALUES ('$name_upper','$staff_id_upper','$pwd_upper','$email','$phone')  ";
               $result=mysqli_query($conn,$sql);
               header("Location:../Admin.Staff.php?StaffAdded=success");
             }
             else
             {
                header("Location:../Admin.Staff.php?Staff=ALREADYEXIST");
             }
           }
           else
           {
              header("Location:../Admin.Staff.php?phonenumber=Invalid");
           } 
        }
   }
   else
   {
     header("Location:../Admin.Staff.php?someField=missing");
   }
?>