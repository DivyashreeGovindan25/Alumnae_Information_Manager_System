<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');

  $sqlf="SELECT count('email') from feedback";
  $resultf=mysqli_query($conn,$sqlf);
  $rowf=mysqli_fetch_array($resultf);

  $sqlc="SELECT count('name') from contact";
  $resultc=mysqli_query($conn,$sqlc);
  $rowc=mysqli_fetch_array($resultc);

  $sqla="SELECT count('alumnae_id') from alumnae_details";
  $resulta=mysqli_query($conn,$sqla);
  $rowa=mysqli_fetch_array($resulta);

  $sqls="SELECT count('ID') from staff_details";
  $results=mysqli_query($conn,$sqls);
  $rows=mysqli_fetch_array($results);
  mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
   <script src="https://kit.fontawesome.com/25d23bef2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <style type="text/css">
       .social-icons img
       {
          margin-left: 450px;
       }
      .box-wrapper
       {
          margin-left: 340px;
          display: flex;
          margin-top: 70px;
       }
       .alumnae-box,.staff-box,.feedback-box,.contact-box
       {
           border: 2px solid black;
           width: 400px;
           height: 230px;
           margin-left: 80px;
           border-radius: 13px;
       }
       .alumnae-box
       {
           background-color: #0066ff;
       }
       .alumnae-box span img
       {
          margin-left: 120px;
          margin-top: 10px;
       }
       .staff-box 
       {
           background-color: #ff0000;
       }
       .staff-box span img
       {
          border-radius: 50%;
          margin-left: 120px;
          margin-top: 10px;
       }
       .contact-box
       {
           background-color: #33cc33;
       }
       .contact-box span img
       {
          border-radius: 50%;
          margin-left: 120px;
          margin-top: 10px;
       }
       .feedback-box
       {
           background-color: #ffcc00;
       }
       .feedback-box span img
       {
          border-radius: 50%;
          margin-left: 120px;
          margin-top: 10px;
       }
        h3
       {
            text-align: center;
            margin-top: 18px;
       }
       h4
       {
            text-align: center;      
       }
       main h1
      {
          margin-left: 700px;
          color: #12475f;
      }
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
        width: 800px;
        margin-top: -1px;
        margin-left: 10px;
     }
    </style>
</head>
<body>
   <div class="wrapper">
    <input type="checkbox" id="sidebar-toggle">
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
                 <a href="index.php">
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
            <span class="fas fa-search" id="search-icon"></span>
            <input type="search" name="search-data" placeholder="Search">
          </div>

          <div class="social-icons">
            <div><a href="image\admin.jpg" data-lightbox="mygallery"><img src="image\admin.jpg" height="40px" width="40px"></a></div>
          </div>
        </header>
      </div>

       <main>
          <h1>Admin Home Page</h1>
          <div class ="box-wrapper">
             <div class="alumnae-box">
                <h3>Alumnae Count</h3>
                <span><img src="image/alumnae.png" width="140px" height="110px"></span><br><br>
                <h4><?php echo"$rowa[0]"?> Alumnae signed up</h4>
             </div>
             <div class="staff-box">
                <h3>Staff Count</h3>
                <span><img src="image/teacher.jpg" width="140px" height="110px"></span><br><br>
                <h4><?php echo"$rows[0]"?> Staffs signed up</h4>
             </div>
          </div>
          
          <div class ="box-wrapper">
             <div class="feedback-box">
                <h3>Feed Backs Received</h3>
                <span><img src="image/feedback.jpg" width="140px" height="110px"></span><br><br>
                <h4>Received <?php echo"$rowf[0]"?> Feed backs</h4>
             </div>
             <div class="contact-box">
                <h3>People Contacted You</h3>
                <span><img src="image/contact.jpg" width="140px" height="110px"></span><br><br>
                <h4><?php echo"$rowc[0]"?> users contacted you</h4>
             </div>
          </div>

       </main>
   </div>
</body>
</html>


