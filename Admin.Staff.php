<?php
  session_start();
?>
<?php
   include 'php\Admin.Staff.Error.php';
?>
<?php 
   if(isset($_REQUEST["delete"]))
   {
      $chk=$_REQUEST["idcheck"];
      $_SESSION['idchk']=$chk;
      header("Location:./php/Admin.Delete.Staff.php");
   }
   if(isset($_REQUEST["add"]))
   {
      $staff_name=$_REQUEST["username"];
      $phone=$_REQUEST["phone"];
      $email=$_REQUEST["email"];
      $staff_id=$_REQUEST["staff_id"];
      $pwd=$_REQUEST["pwd"];
      
      $_SESSION['staff_name']=$staff_name;
      $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;
      $_SESSION['staff_id']=$staff_id;
      $_SESSION['pwd']=$pwd;
      header("Location:./php/Admin.Add.Staff.php");
   }
   if(isset($_REQUEST["update"]))
   {
      $chk=$_REQUEST["idcheck"];
      $staff_name=$_REQUEST["username"];
      $phone=$_REQUEST["phone"];
      $email=$_REQUEST["email"];
      $pwd=$_REQUEST["pwd"];
      $staff_id=$_REQUEST["staff_id"];

      $_SESSION['idchk']=$chk;
      $_SESSION['staff_name']=$staff_name;
      $_SESSION['staff_id']=$staff_id;
      $_SESSION['phone']=$phone;
      $_SESSION['email']=$email;
      $_SESSION['pwd']=$pwd;
      header("Location:./php/Admin.Update.Staff.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Staff Admin Panel</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	  <link rel="stylesheet" type="text/css" href="css/Admin.Staff.css">
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
      main
      {
        margin-top: 41px;
        height: 100%;
      }
      
    </style>
</head>
<body>
   <div class="wrapper">
    <input type="checkbox" id="sidebar-toggle">Staff modulecss
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
               <input type="text" name="search-data" placeholder="Search">
            
          </div>

          <div class="social-icons">
          	 <button type="submit" class="StaffPage-btn" id="search" name="search">Search</button>
          	 <div class="container">
               <div class="select-container">
                   <select name="options">
                   	 <option value="" selected disabled>Search Type</option>
                     <option value="type_name">Satff Name</option>
                     <option value="type_id">Staff Id</option>
                   </select>    
               </div>
             </div>
          </div>   
             </form>
           
        </header>
      </div>

      
       <main> 
          <h1>MANAGE STAFF DETAILS </h1><br>
          <div id="Staff-main-content-wrapper">
          
          <form method="POST">

            <div id="form-wrapper">
              <button type="submit" class="StaffPage-btn" id="delete" name="delete"> - Delete</button>
              <button type="submit" class="StaffPage-btn" id="add" name="add">+ Add</button>
              <button type="submit" class="StaffPage-btn" id="modify" name="update">  Modify</button>
            </div><br>

            <div id="edit-area1">
                <span class="inputbox">
                    <div>
                      <input type="text" name="username">
                      <span class="inputname">NAME</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="phone" maxlength="10" minlength="10">
                      <span class="inputname">PHONE NUM</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="email"  name="email">
                      <span class="inputname">EMAIL Id</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="staff_id">
                      <span class="inputname">STAFF ID</span>
                    </div>
                </span>
                <span class="inputbox">
                    <div>
                      <input type="text"  name="pwd" >
                      <span class="inputname">Pass word</span>
                    </div>
                </span>     
            </div>
            
            <table>
                   <tr>
                      <th>SELECT</th>
                      <th>ID</th>
                      <th>NAME</th>
                      <th>E-MAIL</th>
                      <th>PHONE NUM</th>
                      <th>STAFF ID</th>
                      <th>PASS WORD</th>
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
                 
                                 include 'php\Admin.Staff.Data.php';
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
            <br>
          </form>

               

        </div>
      </main>
       


   </div>
</body>
</html>
