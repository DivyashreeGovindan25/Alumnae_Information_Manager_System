<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $contain_id=$_SESSION['idchk'];
   if (empty($contain_id)) 
   {
      header("Location:../Admin.Alumnae.php?selected=nil");
   }
   else
   {
     $sql="DELETE FROM alumnae_details WHERE id='".$contain_id."' ";
     $result=mysqli_query($conn,$sql);
     header("Location:../Admin.Alumnae.php?Deleted=success");
   }
?>