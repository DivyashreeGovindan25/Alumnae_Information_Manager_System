<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');
  if (isset($_POST["post-event"])) 
  {
     $event_number=$_POST["options"];
     $event_name=$_POST["eve-name"];
     $venue=$_POST["venue"];
     $date=$_POST["date"];
     $des=$_POST["description"];
     if($event_number=="event1") 
     {
      $event_no="1";
     }
     elseif ($event_number=="event2") 
     {
      $event_no="2";
     }
     elseif($event_number=="event3") 
     {
      $event_no="3";
     }
     else
     {
      
     }

     
     
        $insert="INSERT INTO  our_events (event_name,venue,event_date,event_number,description) VALUES ('$event_name','$venue','$date','$event_no','$des')  ";       
      $result=mysqli_query($conn,$insert);
      echo "inserted";
      //header("Location:../Alumnae.Login.php");
    
  }
?>