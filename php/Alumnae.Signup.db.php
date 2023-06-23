<?php
if(isset($_POST["submit-signup"]))
{
  $conn=mysqli_connect('localhost','root','','phpdatabases');

  $fname=$_POST["fname"];
  $lname=$_POST["lname"];
  $reg_no=$_POST["reg_no"];
  $batch=$_POST["batch"];
  $dob=$_POST["dob"];
  $department=$_POST["department"];
  $year_of_passing=$_POST["year_of_passing"];
  $email=$_POST["email"];
  $contact=$_POST["p-no"];
  $wats_app=$_POST["w-no"];
  $address=$_POST["address"];
  $city=$_POST["city"];
  $state=$_POST["state"];
  $zip_code=$_POST["zip_code"];
  $occupation=$_POST["occupation"];
  
  $fname_upper=strtoupper($fname);
  $lname_upper=strtoupper($lname);
  $reg_no_upper=strtoupper($reg_no);
  $batch_upper=strtoupper($batch);
  $department_upper=strtoupper($department);
  $email_lower=strtolower($email);
  $address_upper=strtoupper($address);
  $city_upper=strtoupper($city);
  $state_upper=strtoupper($state);
  $occupation_upper=strtoupper($occupation);

  $sql="SELECT * FROM alumnae_details WHERE reg_no='".$reg_no_upper."' OR email='".$email_lower."' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==0)
  {
      $insert="INSERT INTO  alumnae_details (fname,lname,reg_no,batch,dob,department,yop,email,contact,watsapp,address,city,state,zipcode,occupation) VALUES ('$fname_upper','$lname_upper','$reg_no_upper','$batch_upper','$dob','$department_upper','$year_of_passing','$email_lower','$contact','$wats_app','$address_upper','$city_upper','$state_upper','$zip_code','$occupation_upper')  ";       
      $result=mysqli_query($conn,$insert);
      header("Location:../Alumnae.Login.php");
   }
  else
  {
    header("Location:../Alumnae.Signup.php?error=signupFailed");
  }
}
else
{
    echo "error";
}
?>