<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');
  $sql="SELECT count('email') from feedback";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);
  echo "$row[0]";
  mysqli_close($conn);

?>