<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $contain_id=$_SESSION['idchk'];

   $fname=$_SESSION["fname"];
   $lname=$_SESSION["lname"];
   $reg_no=$_SESSION["reg_no"];
   $batch_id=$_SESSION["batch_id"];
   $dob=$_SESSION["dob"];
   $dprt=$_SESSION["department"];
   $year_of_passing=$_SESSION["year_of_passing"];
   $email=$_SESSION["email"];
   $contact=$_SESSION["contact"];
   $wats_app=$_SESSION["wats_app"];
   $address=$_SESSION["address"];   
   $city=$_SESSION["city"];
   $state=$_SESSION["state"];
   $zipcode=$_SESSION["zipcode"];
   $occupation=$_SESSION["occupation"];
   

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
   
  $sql="SELECT * FROM alumnae_details WHERE id='".$contain_id."' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1)
  {
      $sql1="SELECT * FROM alumnae_details WHERE id='".$contain_id."' ";
      $result1=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc($result1);

      $fname2=$row["fname"];
      $lname2=$row["lname"];
      $reg_no2=$row["reg_no"]
      $batch2=$row["batch"];
      $dob2=$row["dob"];
      $department2=$row["department"];
      $year_of_passing2=$row["yop"];
      $email2=$row["email"];    
      $contact2=$row["contact"];
      $wats_app2=$row["watsapp"];
      $address2=$row["address"];   
      $city2=$row["city"];
      $state2=$row["state"];
      $zip_code2=$row["zipcode"];
      $occupation2=$row["occupation"];

      if (empty($fname_upper))
      {
        $fname_upper=$fname2;
      }
      if (empty($lname_upper))
      {
        $lname_upper=$lname2;
      }      
      if (empty($reg_no_upper))
      {
        $reg_no_upper=$reg_no2;
      }   
      if (empty($batch_id_upper))
      {
        $batch_id_upper=$batch2;
      }
      if (empty($dob))
      {
        $dob=$dob2;
      }
      if (empty($department_upper))
      {
        $department_upper=$department2;
      }
      if (empty($year_of_passing))
      {
        $year_of_passing=$year_of_passing2;
      }
      if (empty($email_lower))
      {
        $email_lower=$email2;
      }
      if (empty($contact))
      {
        $contact=$contact2;
      }
      if (empty($wats_app))
      {
        $wats_app=$wats_app2;
      }
      if (empty($address_upper))
      {
        $address_upper=$address2;
      }
      if (empty($city_upper))
      {
        $city_upper=$city2;
      }
      if (empty($state_upper))
      {
        $state_upper=$state2;
      }
      if (empty($zipcode))
      {
        $zipcode=$zip_code2;
      }
      if (empty($occupation_upper))
      {
        $occupation_upper=$occupation2;
      }
  }
   
  $sql="SELECT * FROM alumnae_details WHERE id='".$contain_id."' ";
   $result=mysqli_query($conn,$sql);
   if (empty($contain_id)) 
   {
      header("Location:../Admin.Alumnae.php?selectedup=nil");
   }
   else
   {
     if (!empty($fname_upper)||!empty($lname_upper)||!empty($year_of_passing)||!empty($email_lower)||!empty($contact)||!empty($wats_app)||!empty($address_upper)||!empty($city_upper)||!empty($state_upper)||!empty($zipcode))
     {
        if (!filter_var($email_lower, FILTER_VALIDATE_EMAIL))
        {
            header("Location:../Admin.Alumnae.php?Email=Invalid");
        }
        else
        {
           if(preg_match('/^[0-9]{10}+$/', $contact)||preg_match('/^[0-9]{10}+$/', $wats_app))
           {
             if(mysqli_num_rows($result)==1)
             {
                 $sql="UPDATE alumnae_details SET fname='".$fname_upper."',lname='".$lname_upper."',reg_no='".$reg_no_upper."',batch='".$batch_id_upper."',dob='".$dob."',department='".$department_upper."',yop='".$year_of_passing."',email='".$email_lower."',contact='".$contact."',watsapp='".$wats_app."' , address='".$address_upper."' ,city='".$city_upper."',state='".$state_upper."',zipcode='".$zipcode."',occupation='".$occupation_upper."' WHERE id='".$contain_id."' ";
                   $result=mysqli_query($conn,$sql);
                   header("Location:../Admin.Alumnae.php?Update=success");
              }        
              else
              {
                 header("Location:../Admin.Alumnae.php?NOID=EXIST");
              }
           }
           else
           {
              header("Location:../Admin.Alumnae.php?phonenumber=Invalid");
           } 
        }
      }
      else
      {
        header("Location:../Admin.Alumnae.php?SomeFields=empty");
      }
  }

   
?>