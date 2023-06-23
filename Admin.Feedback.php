<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
  <link rel="stylesheet" type="text/css" href="css/Admin.Feedback.css">
   <script src="https://kit.fontawesome.com/25d23bef2f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/lightbox.min.css">
    <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
    <style type="text/css">
      .search-wrapper #search-icon
      {
         margin-top: 30px;
      }
      .search-wrapper input
{
    border: 0;
    outline: 0;
    padding: 1rem;
    height: 29px;
    width: 1500px;
    margin-top: -6px;
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
            <span class="fas fa-search"></span>
            <input type="search" name="search-data" placeholder="Search">
          </div>
        </header>
      </div>

       <main>
          <h1>Feed Backs</h1>
          <div>
            <table class="content-table">
             <tr>
               <th>SNO</th>
               <th>E-MAIL</th>
               <th>MESSAGE</th>
             </tr>
             <tbody>
              <?php
               $conn=mysqli_connect('localhost','root','','phpdatabases');
               $sql="SELECT * FROM feedback";
               $result2=mysqli_query($conn,$sql);
               if(mysqli_num_rows($result2)>0)
               {
                 while ($row=mysqli_fetch_assoc ($result2)) 
                 {
                    echo "<tr><td>".$row["id"]. "</td><td>".$row["email"]. "</td><td>".$row["message"]. "</td></tr>";
                  }
                  echo "</table>";
                }
                else
                {
                  echo "NO data found";
                }
              ?>
             </br>
             </tbody>
            </table>
          </div>
       </main>

   </div>
</body>
</html>

