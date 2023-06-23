<?php
  session_start();
?>
<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');

  $id=$_SESSION['id'];
  $_SESSION['myid']=$id;
  $sql="SELECT * FROM alumnae_details WHERE id='".$id."' ";
  $result=mysqli_query($conn,$sql);
  if(mysqli_num_rows($result)==1)
  {
      $sql1="SELECT * FROM alumnae_details WHERE id='".$id."' ";
      $result1=mysqli_query($conn,$sql1);
      $row=mysqli_fetch_assoc($result1);
      $fname=$row["fname"];
      $lname=$row["lname"];
      $reg_no=$row["reg_no"];
      $batch=$row["batch"];
      $dob=$row["dob"];
      $department=$row["department"];
      $year_of_passing=$row["yop"];
      $email=$row["email"];    
      $contact=$row["contact"];
      $wats_app=$row["watsapp"];
      $address=$row["address"];   
      $city=$row["city"];
      $state=$row["state"];
      $zip_code=$row["zipcode"];
      $occupation=$row["occupation"];
  }
  if(mysqli_num_rows($result)==0)
  {
     $name="Enter your name";
  }

?>
<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\Alumnae.Information.css">
  <style type="text/css"> 
  </style>
  <title>YOUR DETAILS</title>
  <style type="text/css"> 
    .success
       {
          background-color: #99e699;
          color: black;
          width:920px;
          height: 40px;
          margin-left: 10px;
          margin-top: 5px;
          font-size: 15px;
          border-radius: 5px;
          text-align: center;
          justify-content: center;
          padding-top: 9px;
       }
    .error
       {
          background-color: #FFD2D2;
          color: black;
          width:920px;
          height: 40px;
          margin-left: 10px;
          margin-top: 10px;
          font-size: 15px;
          border-radius: 5px;
          text-align: center;
          justify-content: center;
          padding-top: 9px;
       }
  </style>
</head>

<body>

  <div class="mydiv">
   
   <div class="nav">
    <nav>
       <ul>
            <li><a href="Event.php">EVENTS</a></li>
            <li><a href="Home.Main.php">LOG OUT</a></li>
        </ul> 
       <h4>PERSONAL DETAILS</h4> 
    </nav> 
  </div>

  <div class="body-wrapper">

    <form method="POST" action="php\Alumnae.Information.Update.db.php">

                  <?php
                      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl,"Updation=successful")==true)
                      {
                        echo "<div class='success'><h3>UPDATION SUCCESSFUL</h3></div>";
                      }
                      if(strpos($fullUrl,"Insertion=successful")==true)
                      {
                        echo "<div class='success'><h3>DETAILS SUCCESSFULLY ADDED</h3></div>";
                      }
                      if(strpos($fullUrl,"Email=Invalid")==true)
                      {
                        echo "<div class='error'><h3>PLEASE PROVIDE VALID EMAIL</h3></div>";
                      }
                      if(strpos($fullUrl,"ContactNumber=Invalid")==true)
                      {
                        echo "<div class='error'><h3>PLEASE PROVIDE VALID CONTACT NUMBER</h3></div>";
                      }
                  ?>

       <span class="input-wrapper">
              <span class="inputbox">
                  <div>
                    <label>FIRST NAME</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="text" required name="fname" placeholder="Enter your first name" value="'.$fname.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="text" required name="fname" placeholder="Enter your first name">';
                    }
                   ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>LAST NAME</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="text" required name="lname" placeholder="Enter your last name" value="'.$lname.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="text" required name="lname" placeholder="Enter your last name">';
                    }
                   ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>REGISTER NUMBER</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="text" required name="reg_no" placeholder="Enter your register number" value="'.$reg_no.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="text" required name="reg_no" placeholder="Enter your register number">';
                    }
                   ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>BATCH</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="text" required name="batch" placeholder="Enter your batch" value="'.$batch.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="text" required name="batch" placeholder="Enter your batch">';
                    }
                   ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>DATE OF BIRTH</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="date" required name="dob" placeholder="Enter your date of birth" value="'.$dob.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="date" required name="dob" placeholder="Enter your date of birth">';
                    }
                   ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>DEPARTMENT</label>
                   <?php
                    if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" required name="department" placeholder="Enter your Department" value="'.$department.'">';
                     }
                    if(mysqli_num_rows($result)==0)
                     {
                       echo '<input type="text" required name="department" placeholder="Enter your Department">';
                     }
                     ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>YEAR OF PASSING</label>
                    <?php
                     if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" maxlength="4" minlength="4"  required name="year_of_passing" placeholder="Enter your year of passing out" value="'.$year_of_passing.'">';
                     }
                     if(mysqli_num_rows($result)==0)
                     {
                        echo '<input type="text" maxlength="4" minlength="4"  required name="year_of_passing" placeholder="Enter your year of passing out">';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>E-MAIL ID</label>
                    <?php
                      if(mysqli_num_rows($result)==1)
                      {
                         echo '<input type="email" required name="email" placeholder="Enter your mail id" value="'.$email.'">';
                      }
                      if(mysqli_num_rows($result)==0)
                      {
                         echo '<input type="email" required name="email" placeholder="Enter your mail id">';
                      }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>CONTACT NUMBER</label>
                    <?php
                     if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" maxlength="10" minlength="10" pattern="[1-9]{1}[0-9]{9}" required name="p-no" placeholder="Enter your contact number" value="'.$contact.'">';
                     }
                     if(mysqli_num_rows($result)==0)
                     {
                        echo '<input type="text" maxlength="10" minlength="10" pattern="[1-9]{1}[0-9]{9}" required name="p-no" placeholder="Enter your contact number">';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>WATSAPP NUMBER</label>
                    <?php
                     if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" maxlength="10" minlength="10" pattern="[1-9]{1}[0-9]{9}" required name="w-no" placeholder="Enter your watsapp number" value="'.$wats_app.'">';
                     }
                     if(mysqli_num_rows($result)==0)
                     {
                        echo '<input type="text" maxlength="10" minlength="10" pattern="[1-9]{1}[0-9]{9}" required name="w-no" placeholder="Enter your watsapp number">';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>ADDRESS</label>
                   <?php
                    if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" required name="address" placeholder="Enter your residential address" value="'.$address.'">';
                     }
                    if(mysqli_num_rows($result)==0)
                     {
                       echo '<textarea cols="8" rows="2" required name="address" placeholder="Enter your residential address"></textarea>';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>CITY</label>
                   <?php
                    if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" required name="city" placeholder="Enter city" value="'.$city.'">';
                     }
                    if(mysqli_num_rows($result)==0)
                     {
                       echo '<textarea cols="8" rows="2" required name="city" placeholder="Enter your city"></textarea>';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>STATE</label>
                   <?php
                    if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" required name="state" placeholder="Enter state" value="'.$state.'">';
                     }
                    if(mysqli_num_rows($result)==0)
                     {
                       echo '<textarea cols="8" rows="2" required name="state" placeholder="Enter your state"></textarea>';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>ZIP CODE</label>
                   <?php
                    if(mysqli_num_rows($result)==1)
                     {
                        echo '<input type="text" required name="zip_code" placeholder="Enter zipcode" value="'.$zip_code.'">';
                     }
                    if(mysqli_num_rows($result)==0)
                     {
                       echo '<textarea cols="8" rows="2" required name="zip_code" placeholder="Enter zipcode"></textarea>';
                     }
                    ?>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>OCCUPATION</label>
                    <?php
                    if(mysqli_num_rows($result)==1)
                    {
                       echo '<input type="text" required name="occupation" placeholder="Enter your occupation" value="'.$occupation.'">';
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                       echo '<input type="text" required name="occupation" placeholder="Enter your occupation">';
                    }
                   ?>
                  </div>
              </span><br/>
              <button type="submit" name="update" class="submit">Update</button><br>
       </span>
      
    </form>

   </div>

  </div>

</body>
</html>