<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');

  $sql="SELECT * FROM our_events";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)>0)
  {
      $get1="SELECT * FROM our_events WHERE event_number='1' ";
      $result_get1=mysqli_query($conn,$get1);
      if(mysqli_num_rows($result_get1)==1) 
      {
          $row1=mysqli_fetch_assoc($result_get1);
          $event_name1=$row1["event_name"];
          $venue1=$row1["venue"];
          $event_date1=$row1["event_date"];
          $event_number1=$row1["event_number"];
          $description1=$row1["description"];
      }
      $get2="SELECT * FROM our_events WHERE event_number='2' ";
      $result_get2=mysqli_query($conn,$get2);
      if(mysqli_num_rows($result_get2)==1) 
      {
          $row2=mysqli_fetch_assoc($result_get2);
          $event_name2=$row2["event_name"];
          $venue2=$row2["venue"];
          $event_date2=$row2["event_date"];
          $event_number2=$row2["event_number"];
          $description2=$row2["description"];
      }
      $get3="SELECT * FROM our_events WHERE event_number='3' ";
      $result_get3=mysqli_query($conn,$get3);
      if(mysqli_num_rows($result_get3)>0) 
      {
          $row3=mysqli_fetch_assoc($result_get3);
          $event_name3=$row3["event_name"];
          $venue3=$row3["venue"];
          $event_date3=$row3["event_date"];
          $event_number3=$row3["event_number"];
          $description3=$row3["description"];
      }
       
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css\Event.Css.css">
    <title>Event Page</title>
</head>
<body>
    
    <section class="event">

        <div class="header-text">
            <h2> Our Events</h2><a href="index.php"><img src="image/back.png" width="100px" height="80px"></a>
        </div>

        
        <div class="event-content">

            <div class="content-post">
                <div class="event_photo">
                    <img src="image/wcc11.jpg" alt="event photo" width="200px" height="350px">
                </div>
                <div class="content-text">
                    <h4><?php echo $event_name1; ?></h4>
                    <ul class="post-detail">
                        <li> <?php echo $event_name1; ?>,<?php echo $venue1; ?> </li>
                        <li> <?php echo $event_date1; ?> </li>
                        <li> College Event </li>
                    </ul>
                    <p> <?php echo $description1; ?>
                    </p>
                </div>
            </div>

            <div class="content-post">
                <div class="event_photo">
                    <img src="image/wcc12.jpg" alt="event photo" width="200px" height="350px">
                </div>
                <div class="content-text">
                    <h4> <?php echo $event_name2; ?> </h4>
                    <ul class="post-detail">
                        <li> <?php echo $event_name2; ?>,<?php echo $venue2; ?> </li>
                        <li> <?php echo $event_date2; ?></li>
                        <li> College Event </li>
                    </ul>
                    <p>
                        <?php echo $description2; ?>
                    </p>
                </div>   
            </div>

            <div class="content-post">
                <div class="event_photo">
                    <img src="image/wcc13.jpg" alt="event photo" width="200px" height="350px">
                </div>
                <div class="content-text">
                    <h4><?php echo $event_name3; ?></h4>
                    <ul class="post-detail">

                        <li> <?php echo $event_name3; ?>,<?php echo $venue3; ?> </li>
                        <li> <?php echo $event_date3; ?></li>
                        <li> College Event</li>
                    </ul>
                    <p>
                        <?php echo $description3; ?>
                    </p>
                </div>   
            </div>


        </div>
    </section>
</body>
</html>