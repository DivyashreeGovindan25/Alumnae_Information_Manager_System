<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="css\homemaincss.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<style type="text/css">
      .bgimage
      {
        background: url('mygrad.jpg');
      }
      @viewport
      {
        zoom:1.0;
        width: extend-to-zoom;
      }
      @-ms-viewport
      {
        width: extend-to-zoom;
        zoom:1.0;
      }
    </style>
    <link rel="stylesheet" type="text/css" href="css\homecss.css">
  </head>
  <body>
    <div class="bgimage">
    <div class="wrapper">
       <div id="heading">
          <img src="image\womenschristiancollege.png" id="wccimg"height="60" width="70">
          <h3 id="wcc">WOMEN'S CHRISTIAN COLLEGE</h3></br>
          <h1>ALUMNAE INFORMATION MANAGEMENT SYSTEM</h1>
       </div>
    <nav>
      <label class="it">WCC</label>
      <ul>
         <li><a class="active" href="#">Home</a></li>
         <li><a href="Admin.Login.php">Login</a>
             <!--<ul>
               <li><a href="Alumnae.Login.php">Alumnae</a></li>
               <li><a href="Staff.Login.php">Staff</a></li>
               <li><a href="Admin.Login.php">Admin</a></li>
             </ul>-->
         </li>
         <li><a href="Event.php">Event</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="Contact.Us.php">Contact</a></li>   
      </ul>
    </nav>
   </div>
   </div>
   <section>
       <a href="#second-section"><div class="scrolldown">
           <span></span>
           <span></span>
           <span></span></a>
       </div>
  </section>

     <section id="second-section">
     <div class="footer">
     	<div class="foot-content">
     		<div class="foot-about">
     			<h4>About</h4>
     			<p>The College Motto is “Lighted to Lighten” and hence the appropriateness of the little earthenware Indian lamp.  From such a lamp, with its flame of fire constantly renewed by the sacrifice of the oil poured in, its need of shelter from the wind, its flame kindled afresh every evening from a source of light, comes the suggestion of a life, spending itself to transform itself into service, flickering but not failing in the midst of temptation, existing only to give.</p>
     		</div>
     		<div class="foot-links">
     			<h4>Quick Links</h4>
     			<nav>
     			<ul>
     				<li><a href="Alumnae.Login.php">Login</a></li></br>
     				<li><a href="Event.php">Event</a></li></br>
     				<li><a href="gallery.php">Gallery</a></li></br>
     				<li><a href="Contact.Us.php">Contact</a></li></br>
     			</ul>
     			</nav>
     		</div>
          
     		<div class="foot-feedback">
     			<h4>Feed Back</h4>
          <div class="content">
            <form method="POST" action="php\SubmitFeedback.db.php">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" name="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <textarea rows="2" cols="8" name="msg"></textarea>
              </div>
              <div class="btn">
                <button type="submit" value="sendFeedback" name="sendFb">Send</button>
              </div>
            </form>
          </div>
     		</div>
     	</div>
  	    <div class="foot-bottom">
  	    	&copy; Alumnae Information Management system | 2021 All Rights Reserved
  	    </div>
    </section>
     </div> 
  </body>
</html>