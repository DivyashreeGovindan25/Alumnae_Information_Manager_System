<?php
  session_start();
  $conn=mysqli_connect('localhost','root','','phpdatabases');
  $staff_id_prev=$_SESSION["staff_id2"];
  if (isset($_POST["resetpwd"])) 
  {
  	 $staff_id=$_POST["staff_id"];
  	 $old_pwd=$_POST["old_pwd"];
  	 $new_pwd=$_POST["new_pwd"];
  	 $staff_id_upper=strtoupper($staff_id);
  	 $old_upper=strtoupper($old_pwd);
  	 $new_upper=strtoupper($new_pwd);
  	 if($staff_id_upper==$staff_id_prev) 
  	 {
  	     	 $sql="SELECT * FROM staff_details WHERE staff_id='".$staff_id_upper."' AND pwd='".$old_upper."' ";
  	         $result=mysqli_query($conn,$sql);
  	         if(mysqli_num_rows($result)==1)
  	         {
                if ($old_upper==$new_upper) 
                {
                   header("Location:../individual.staff.php?pwd=same");
                }
                else
                {
                   $update="UPDATE staff_details SET pwd='".$new_upper."' WHERE staff_id='".$staff_id_upper."' ";
                   $res=mysqli_query($conn,$update);
                   header("Location:../individual.staff.php?change=success");
                }           
  	         }
             else
             {
     	        header("Location:../individual.staff.php?wrong=acc");
             }
  	 }
  	 else
  	 {
  	 	 header("Location:../individual.staff.php?no=acc");
  	 }
  	 
  }
?>