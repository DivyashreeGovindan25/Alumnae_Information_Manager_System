<?php
  if (isset($_POST["post-event"])) 
  {
     $conn=mysqli_connect('localhost','root','','phpdatabases');
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

  	 $sql="SELECT * FROM our_events WHERE event_number='".$event_no."'";
  	 $result=mysqli_query($conn,$sql);
     $num=mysqli_num_rows($result);
  	 if ($num==0) 
     {
        $insert="INSERT INTO our_events(event_name,venue,event_date,event_number,description) VALUES('$event_name','$venue','$date','$event_no','$des') ";
        $result_insert=mysqli_query($conn,$insert);
        header("Location:../postevent.php?inserted");
     }
     else
     {
        $update="UPDATE our_events SET event_name='".$event_name."',venue='".$venue."',event_date='".$date."',description='".$des."' WHERE event_number='".$event_no."' ";
        $result_update=mysqli_query($conn,$update);
        header("Location:../postevent.php?updated");
     }
  }
?>