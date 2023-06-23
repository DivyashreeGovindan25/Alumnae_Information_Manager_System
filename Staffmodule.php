<?php
  session_start();
  $conn=mysqli_connect('localhost','root','','phpdatabases');
?>
<?php
   if(isset($_REQUEST["submit"]))
   {
      $chk=$_REQUEST["emailcheck"];
      $a=implode(",", $chk);
      $_SESSION['emails']=$a;
      header("Location:./Sending.Mail.php");
   }
?>
<!DOCTYPE html>
<html>
	<title>Alumnae details</title>
<head>
   <script src="https://kit.fontawesome.com/25d23bef2f.js" crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	 <link rel="stylesheet" type="text/css" href="css/Staffmodulecss.css">
   <link rel="stylesheet" type="text/css" href="css/search.css">
</head>
<style type="text/css">
  .error
       {
          background-color: #FFD2D2;
          color: black;
          width:800px;
          height: 40px;
          margin-left: 380px;
          margin-top: 10px;
          font-size: 15px;
          border-radius: 5px;
          text-align: center;
          justify-content: center;
          padding-top: 9px; 
       }
      .error h3
      {
          margin-top: 5px;
      }
      #send-mail
      {
         height: 50px;
         width: 140px;
         background-color: #3333cc;
         float: right;
         color: white;
         border: none;
         outline: none;
         border-radius:8px;
         font-size: 20px;
         font-weight: 500;
         margin-right: 20px;
      }
      table 
{
  border-collapse: collapse;
  width: 150%;
  font-family: monospace;
  text-align: center;
  color: seagreen;
}
tr
{
  color:black;
  font-size: 14px;
}
.nav nav
 {
    background-color: #12475f;
    height: 80px;
    width: 1600px;
    top: 0;
    margin-left: -8px;
 }
.nav nav h4
{
    margin-left: 20px;
    font-size: 36px;
    color: white;
    margin-top: 10px;
    padding: 17px 5px;
}
.nav nav ul
{
  float: right;
  margin-right: 20px;
}
.nav nav ul li
{
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
  margin-top: -15px;
}
.nav nav ul li a
{
  color: white;
  font-size: 23px;
  padding: 7px 13px;
  border-radius: 8px;
  text-transform: uppercase;
  text-decoration: none;
}
nav ul li a:hover,active
{
    background: #99c2ff;
}
</style>
<script type="text/javascript">
  function checkAll()
  {
      var tot=document.forms[0].elements.length;
      for(var i=0;i<tot;i++)
      {
        var elementname=document.forms[0].elements[i].name;
        if(elementname!=undefined & elementname.indexOf("emailcheck")!=-1)
        {
           document.forms[0].elements[i].checked=document.frm.checkall.checked;
        }    
      }
  }
</script>

<body>

   
   <div class="nav">
    <nav>
       <ul>
            <li><a href="individual.staff.php">Back</a></li>
        </ul> 
       <h4>ALUMNAE INFORMATION</h4> 
    </nav> 

  <div class="search-wrapper">
    <form method="POST" name="frm">
      
       <span class="fas fa-search"></span>
            <input type="text" name="search-data" placeholder="Search">
          
          <div class="social-icons">
             <button type="submit" class="AlumnaePage-btn" id="search" name="search">Search</button>
             <div class="container">
               <div class="select-container">
                   <select name="options">
                     <option value="" disabled selected>Search Type</option>
                     <option value="type_name">Alumnae Name</option>
                     <option value="type_reg">Register Number</option>
                     <option value="type_batch">Batch Id</option>
                     <option value="type_department">Department</option>
                     <option value="type_year_of_passing">Year of passing</option>
                   </select>    
               </div>
             </div>
          </div>
    
  </div> 
</div><br>

  <?php
      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
      if(strpos($fullUrl,"Emailselected=nil")==true)
      {
         echo "<div class='error'><h3>Please Select Atleast One Alumnae To Send Mail</h3></div>";
      }
  ?>
  <!--<form name="frm" method="POST" >action="mailSend.php">-->
    <button type="submit" name="submit" id="send-mail">Send Mail</button> </br></br></br>
   <table class="content-table">
      <tr>
        <th><input type="checkbox" name="checkall" onchange="checkAll()"></th>
        <th>ID</th>
        <th>FNAME</th>
        <th>LNAME</th>
        <th width="10px">REG</th>
        <th>BATCH</th>
        <th>DOB</th>
        <th>DEPARTMENT</th>
        <th>YOP</th>
        <th>E-MAIL</th>
        <th>CONTACT</th>
        <th>WATSAPP</th>
        <th>ADDRESS</th>
        <th>ADDER 2</th>
        <th>CITY</th>
        <th>STATE</th>
        <th>ZIP</th>
        <th>OCCUPATION</th>  
      </tr>
      <tbody>
      <?php
          if (isset($_REQUEST["search"])) 
          {
            if(!empty($_REQUEST['search-data'])) 
            {
              if(!empty($_REQUEST['options'])) 
              {
                 $selected = $_REQUEST['options'];
                 $search_data=strtoupper($_REQUEST['search-data']);
                 
                 include 'Staff.Module.Data.php';
              }
              else
              {
                 echo "<script type='text/javascript'>
                           alert('Please select search type to search');

                       </script>";
                 $sql="SELECT  * FROM alumnae_details ";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='emailcheck[]' value=".$row["email"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["address2"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
              }
            }
            else
            {
                echo "<script type='text/javascript'>
                           alert('Please enter something to search');

                       </script>";   
                $sql="SELECT  * FROM alumnae_details";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='emailcheck[]' value=".$row["email"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["address2"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
            }
          }
          else
          {
            $sql="SELECT  * FROM alumnae_details ";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='emailcheck[]' value=".$row["email"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["address2"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                }
          }

      ?>
      </br>
      </tbody>
   </table>
   
  </form>

</body>
</html>
