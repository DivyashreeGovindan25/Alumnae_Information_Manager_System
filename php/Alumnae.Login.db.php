<?php
  session_start();
?>
<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');
  $un=$_SESSION["un"];
  $pw=$_SESSION["pwd"];
  $un_upper=strtoupper($un);
  $date_final=explode('/',$pw);
  $year=$date_final[2];
  $month=$date_final[1];
  $day=$date_final[0];
  $new_date=$year."-".$month."-".$day;
  $sql="SELECT * FROM alumnae_details WHERE reg_no='".$un_upper."' AND dob='".$new_date."' OR  email='".$un_upper."' AND dob='".$new_date."' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1)
  {
      $sql1="SELECT id FROM alumnae_details WHERE reg_no='".$un."' AND dob='".$new_date."' OR email='".$un_upper."' AND dob='".$new_date."' ";
      $result1=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc ($result1);
      $id=$row["id"];
      $_SESSION['id']=$id;
      header("Location:../Alumnae.Information.php");
  }
  else
  {
  	header("Location:../Admin.Login.php?login=failed");
  }

?>

