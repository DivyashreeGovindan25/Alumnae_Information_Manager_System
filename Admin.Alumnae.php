<?php
  session_start();
?>
<?php 
   if(isset($_REQUEST["delete"]))
   {
      $chk=$_REQUEST["idchk"];
      $_SESSION['idchk']=$chk;
      header("Location:./php/Admin.Delete.Alumnae.php");
   }
   if(isset($_REQUEST["add"]))
   {
      $fname=$_REQUEST["fname"];
      $lname=$_REQUEST["lname"];
      $reg_no=$_REQUEST["reg_no"];
      $batch_id=$_REQUEST["batch_id"];    
      $dob=$_REQUEST["dob"];
      $dprt=$_REQUEST["department"];
      $year_of_passing=$_REQUEST["year_of_passing"];
      $email=$_REQUEST["email"];
      $contact=$_REQUEST["contact"];
      $wats_app=$_REQUEST["wats_app"];
      $address=$_REQUEST["address"];
      $city=$_REQUEST["city"];
      $state=$_REQUEST["state"];
      $zipcode=$_REQUEST["zipcode"];
      $occupation=$_REQUEST["occupation"];

      $_SESSION['fname']=$fname;
      $_SESSION['lname']=$lname;
      $_SESSION['reg_no']=$reg_no;
      $_SESSION['batch_id']=$batch_id;
      $_SESSION['dob']=$dob;
      $_SESSION['department']=$dprt;
      $_SESSION['year_of_passing']=$year_of_passing;
      $_SESSION['email']=$email;
      $_SESSION['contact']=$contact;
      $_SESSION['wats_app']=$wats_app;
      $_SESSION['address']=$address;
      $_SESSION['city']=$city;
      $_SESSION['state']=$state;  
      $_SESSION['zipcode']=$zipcode;
      $_SESSION['occupation']=$occupation;
      
      header("Location:./php/Alumnae.Add.Admin.php");
   }
   if(isset($_REQUEST["signup"]))
   {
      $name=$_REQUEST["username"];
      $reg_no=$_REQUEST["reg_no"];
      $batch_id=$_REQUEST["batch_id"];
      $email=$_REQUEST["email"];      
      $dob=$_REQUEST["dob"];

      $_SESSION['name']=$name;
      $_SESSION['reg_no']=$reg_no;
      $_SESSION['batch_id']=$batch_id;
      $_SESSION['email']=$email;
      $_SESSION['dob']=$dob;
      header("Location:./php/Admin.Signup.Alumnae.php");
   }
   if(isset($_REQUEST["update"]))
   {
      $chk=$_REQUEST["idchk"];
      $_SESSION['idchk']=$chk;

      $fname=$_REQUEST["fname"];
      $lname=$_REQUEST["lname"];
      $dprt=$_REQUEST["department"];
      $year_of_passing=$_REQUEST["year_of_passing"];
      $email=$_REQUEST["email"];
      $contact=$_REQUEST["contact"];
      $wats_app=$_REQUEST["wats_app"];
      $address=$_REQUEST["address"];
      $city=$_REQUEST["city"];
      $state=$_REQUEST["state"];
      $zipcode=$_REQUEST["zipcode"];
      $reg_no=$_REQUEST["reg_no"];
      $batch_id=$_REQUEST["batch_id"];    
      $dob=$_REQUEST["dob"];

      $_SESSION['fname']=$fname;
      $_SESSION['lname']=$lname;
      $_SESSION['department']=$dprt;
      $_SESSION['year_of_passing']=$year_of_passing;
      $_SESSION['email']=$email;
      $_SESSION['contact']=$contact;
      $_SESSION['wats_app']=$wats_app;
      $_SESSION['address']=$address;
      $_SESSION['city']=$city;
      $_SESSION['state']=$state;  
      $_SESSION['zipcode']=$zipcode;
      $_SESSION['reg_no']=$reg_no;
      $_SESSION['batch_id']=$batch_id;
      $_SESSION['dob']=$dob;
      header("Location:./php/Admin.Update.Alumnae.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Alumnae Admin Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/Admin.Alumnae.css">
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
    <script src="https://kit.fontawesome.com/25d23bef2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <style type="text/css">
      .search-wrapper #search-icon
      {
         margin-top: 5px;
      }
      .search-wrapper input
     {
        border: 0;
        outline: 0;
        padding: 1rem;
        height: 29px;
        width: 700px;
        margin-top: -1px;
        margin-left: 10px;
     }
     #add
{
  background:#00ff00;
  width: 150px;
  height: 50px;
  border-radius: 8px;
  border: 1.5px solid black;
  font-weight: 300;
  font-size: 20px;
  margin-right: 180px;
  float: right;
  margin-top: -50;
}
      main
      {
        margin-top: 41px;
        height: 100%;
        width: 110%;
      }
      table 
      {
         border-collapse: collapse;
         width: 115.5%;
         font-family: monospace;
         font-size: 15px;
         text-align: center;
         color: seagreen;
         margin-top: 20px;
         padding-left: 10px;
         column-gap: 40px;
         margin-left: -215px;
      }
      table th
      {
         font-size: 20px;
      }
      table tr
      {
        font-size: 13px;
      }
      table .space
      {
         margin-left: 20px;
      }
      main #Alumnae-main-content-wrapper #edit-area3
      {
        display: flex;
        margin-top: -20px;
      }
    </style>
</head>
<body>
   <div class="wrapper">
    <input type="checkbox" id="sidebar-toggle">Staffmodulecss
    <div class="sidebar">
      <div class="sidebar-header">
        <h3 class="brand">
          <span class="s/w-name">Alumnae System</span>
        </h3>
          <label class="fas fa-bars" for="sidebar-toggle"></label>
   	  </div>
      <div class="sidebar-menu">
           <ul>
              <li>
                 <a href="admin.php">
                   <span class="fas fa-house-user"></span>
                   <span>Home</span>
                 </a>
              </li>
              <li>
                 <a href="Admin.Alumnae.php">
                   <span class="fas fa-users"></span>
                   <span>Alumnae</span>
                 </a>
              </li>
              <li>
                 <a href="Admin.Staff.php">
                   <span class="fas fa-users-cog"></span>
                   <span>Staff</span>
                 </a>
              </li>
              <li>
                 <a href="Admin.Contacted.php">
                   <span class="fas fa-envelope-open-text"></span>
                   <span>Contacted</span>
                 </a>
              </li>
              <li>
                 <a href="Admin.Feedback.php">
                   <span class="far fa-comments"></span>
                   <span>Feed Backs</span>
                 </a>
              </li>
              <li class="logout">
                 <a href="Home.Main.php">
                   <span class="fas fa-sign-out-alt"></span>
                   <span>Log out</span>
                 </a>
              </li>
           </ul>
      </div>
    </div>
      <div class="main-content">

        <header>
          <div class="search-wrapper">
           <form method="POST">
            <span class="fas fa-search" id="search-icon"></span>
            <input type="search" name="search-data" placeholder="Search">
          </div>

          <div class="social-icons">
          	 <button type="submit" class="AlumnaePage-btn" name="search" id="search">Search</button>
          	 <div class="container">
               <div class="select-container">
                   <select name="options">
                     <option value="" disabled selected>Search Type</option>
                     <option value="type_name">Alumnae Name</option>
                     <option value="type_reg">Register Number</option>
                     <option value="type_batch">Batch Id</option>
                     <option value="type_department">Department</option>
                     <option value="type_year_of_passing">year of passing</option>
                   </select>   
               </div>
             </div>
          </div>
           </form>

        </header>
      </div>

      
       <main> 

          <h1>MANAGE ALUMNAE DETAILS </h1><br>
          <div id="Alumnae-main-content-wrapper">

          <form method="POST">
            <div id="form-wrapper">
          		  <button type="submit" class="AlumnaePage-btn" id="delete" name="delete"> - Delete</button>
          		  <button type="submit" class="AlumnaePage-btn" id="modify" name="update">  Modify</button>
          		  <button type="submit" class="AlumnaePage-btn" id="add" name="add">+ Add</button>
           </div><br>

            <div id="edit-area1">
                <span class="inputbox">
                    <div>
                      <input type="text"  name="fname">
                      <span class="inputname">FIRST NAME</span>
                    </div>
                </span>            
                <span class="inputbox">
                    <div>
                      <input type="text"  name="lname">
                      <span class="inputname">LAST NAME</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="reg_no">
                      <span class="inputname">REG NO</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="batch_id">
                      <span class="inputname">BATCH ID</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="date"  name="dob">
                      <span class="inputname">DOB</span>
                    </div>
                </span>
                
            </div><br><br><br>
            <div id="edit-area2">
                <span class="inputbox">
                    <div>
                      <input type="text"  name="department">
                      <span class="inputname">DEPARTMENT</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="year_of_passing" maxlength="" minlength="4">
                      <span class="inputname">YEAR OF PASSING</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="email"  name="email">
                      <span class="inputname">E-MAIL</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="contact" maxlength="16" minlength="10">
                      <span class="inputname">CONTACT</span>
                    </div>
                </span> 
                <span class="inputbox">
                    <div>
                      <input type="text"  name="wats_app" maxlength="16" minlength="10" pattern="[1-9]{1}[0-9]{9}">
                      <span class="inputname">WATSAPP</span>
                    </div>
                </span>
            </div><br><br><br>
            <div id="edit-area3">                    
                <span class="inputbox">
                    <div>
                      <input type="text"  name="address">
                      <span class="inputname">ADDRESS</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="city">
                      <span class="inputname">CITY</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="state">
                      <span class="inputname">STATE</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="zipcode" maxlength="6" minlength="6">
                      <span class="inputname">ZIPCODE</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="occupation">
                      <span class="inputname">OCCUPATION</span>
                    </div>
                </span>
            </div>

               <table>
          	   	   <tr>
                      <th></th>
          	   	   	  <th>ID</th>
                      <th class="space">FNAME</th>
                      <th class="space">LNAME</th>
                      <th class="space">REG</th>
                      <th>BATCH</th>                   
                      <th>DOB</th>  
                      <th>DEPARTMENT</th>
                      <th class="space">YOP</th>
                      <th class="space">E-MAIL</th>
                      <th>CONTACT</th>
                      <th>WATSAPP</th>
                      <th width="20px">ADDRESS</th>
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
                                 $search_data=$_REQUEST['search-data'];
                 
                                 include 'php\Admin.Alumnae.Data.php';
                              }
                              else
                              {
                                 echo "<script type='text/javascript'>
                                     alert('Please select search type to search');
                                     </script>";
                              }
                            }
                            else
                            {
                                echo "<script type='text/javascript'>
                                    alert('Please enter something to search');
                                    </script>";     
                            }
                         }
                      ?>
                   </tbody>
          	   </table>

           </form>
        </div>

      </main>
       


   </div>
</body>
</html>