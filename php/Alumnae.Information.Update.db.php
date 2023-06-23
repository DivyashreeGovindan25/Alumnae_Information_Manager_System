<?php
  session_start();
?>
<?php
if(isset($_POST["update"]))
{
  $conn=mysqli_connect('localhost','root','','phpdatabases');

  $myid=$_SESSION['myid'];

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
  $department_upper=strtoupper($department);
  $email_lower=strtolower($email);
  $address_upper=strtoupper($address);
  $city_upper=strtoupper($city);
  $state_upper=strtoupper($state);
  $batch_upper=strtoupper($batch);
  $reg_no_upper=strtoupper($reg_no);
  $occupation_upper=strtoupper($occupation);

  $sql="SELECT * FROM alumnae_details WHERE id='".$myid."' ";
  $result=mysqli_query($conn,$sql);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL))
   {
      header("Location:../Alumnae.Information.php?Email=Invalid");
   }
  else
  {
  	if(preg_match('/^[0-9]{10}+$/', $contact))
  	{
        if(mysqli_num_rows($result)==1)
        {
  	       $sql1="UPDATE alumnae_details SET fname='".$fname_upper."',lname='".$lname_upper."',reg_no='".$reg_no_upper."',batch='".$batch_upper."',dob='".$dob."',department='".$department_upper."',yop='".$year_of_passing."',email='".$email_lower."',contact='".$contact."',watsapp='".$wats_app."' , address='".$address_upper."' ,city='".$city_upper."',state='".$state_upper."',zipcode='".$zip_code."',occupation='".$occupation_upper."'  WHERE id='".$myid."' ";
           $result1=mysqli_query($conn,$sql1);
           header("Location:../Alumnae.Information.php?Updation=successful");
        }
        if(mysqli_num_rows($result)==0)
        {
  	       $insert="INSERT INTO  alumnae_details (fname,lname,reg_no,batch,dob,department,yop,email,contact,watsapp,address,city,state,zipcode,occupation) VALUES ('$fname_upper','$lname_upper','$reg_no_upper','$batch_upper','$dob','$department_upper','$year_of_passing','$email_lower','$contact','$wats_app','$address_upper','$city_upper','$state_upper','$zip_code','$occupation_upper')  ";       
            $result=mysqli_query($conn,$insert);
           header("Location:../Alumnae.Information.php?Insertion=successful");
        }
    }
    else
    {
    	 header("Location:../Alumnae.Information.php?ContactNumber=Invalid");
    } 

  	 
  }
  
  
 }
 else
 {
 	echo "Press submit";
 }
?>