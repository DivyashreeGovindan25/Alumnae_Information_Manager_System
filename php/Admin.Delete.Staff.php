<?php
   session_start();
?>
<?php
   $conn=mysqli_connect('localhost','root','','phpdatabases');
   $contain_id=$_SESSION['idchk'];
   if (empty($contain_id)) 
   {
      header("Location:../Admin.Staff.php?selected=nil");
   }
   else
   {
     $sql="DELETE FROM staff_details WHERE id='".$contain_id."' ";
     $result=mysqli_query($conn,$sql);
     header("Location:../Admin.Staff.php?Deleted=success");
   }
?>