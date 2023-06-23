<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');

   $fname=$_SESSION['fname'];
   $lname=$_SESSION['lname'];
   $reg_no=$_SESSION['reg_no'];
   $batch_id=$_SESSION['batch_id'];
   $dob=$_SESSION['dob'];
   $dprt=$_SESSION['department'];
   $year_of_passing=$_SESSION["year_of_passing"];
   $email=$_SESSION['email'];
   $contact=$_SESSION['contact'];
   $wats_app=$_SESSION['wats_app'];
   $address=$_SESSION['address'];   
   $city=$_SESSION['city'];
   $state=$_SESSION['state'];
   $zipcode=$_SESSION['zipcode'];
   $occupation=$_SESSION['occupation'];
   

   $fname_upper=strtoupper($fname);
   $lname_upper=strtoupper($lname);
   $department_upper=strtoupper($dprt);
   $email_lower=strtolower($email);
   $address_upper=strtoupper($address);
   $city_upper=strtoupper($city);
   $state_upper=strtoupper($state);
   $batch_id_upper=strtoupper($batch_id);
   $reg_no_upper=strtoupper($reg_no);
   $occupation_upper=strtoupper($occupation);

   
   if (!empty($fname_upper)&&!empty($department_upper)&&!empty($email_lower)&&!empty($contact))
   {
      if (!empty($id)) 
      {
          $sql="SELECT * FROM alumnae_details WHERE reg_no='".$reg_no_upper."' OR email='".$email_lower."' ";
          $result=mysqli_query($conn,$sql);
          if(mysqli_num_rows($result)==0)
          {
             $sql3="SELECT * FROM alumnae_details WHERE contact='".$contact."' ";  
             $result3=mysqli_query($conn,$sql3);
             if(mysqli_num_rows($result3)==0)
             {
               if (!filter_var($email_lower, FILTER_VALIDATE_EMAIL))
               {
                  header("Location:../Admin.Alumnae.php?Email=Invalid");
               }
               else
               {
                if(preg_match('/^[0-9]{10}+$/', $contact))
                {        
                     $insert="INSERT INTO  alumnae_details (fname,lname,reg_no,batch,dob,department,yop,email,contact,watsapp,address,city,state,zipcode,occupation) VALUES ('$fname_upper','$lname_upper','$reg_no_upper','$batch_upper','$dob','$department_upper','$year_of_passing','$email_lower','$contact','$wats_app','$address_upper','$city_upper','$state_upper','$zip_code','$occupation_upper')  ";       
                      $result=mysqli_query($conn,$insert);
                       header("Location:../Admin.Alumnae.php?success");  
                }
                else
                {
                   header("Location:../Admin.Alumnae.php?phonenumber=Invalid");
                } 
              }
            }
            else
            {
               header("Location:../Admin.Alumnae.php?contactdeDetails=ALREADYEXIST");
            }
         }
         else
         {
            header("Location:../Admin.Alumnae.php?Alumnae=ALREADYEXIST");
         }
     }
     else
     {
        header("Location:../Admin.Alumnae.php?NOAlumnae=SignedUp");
     }
   }
   else
   {
     header("Location:../Admin.Alumnae.php?SomeFields=empty");
   }
?>