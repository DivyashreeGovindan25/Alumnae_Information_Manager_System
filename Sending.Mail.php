<?php
   session_start();
?>
<?php
   $contain_email=$_SESSION['emails'];
   if (empty($contain_email)) 
   {
      header("Location:./Staffmodule.php?Emailselected=nil");
   }
   else
   {
     
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Email Edit</title>
	<link rel="stylesheet" type="text/css" href="css/Sending.Mail.css">
  <style type="text/css">
    section
    {
       width: 100%;
       height: 100%;
    }
    #to
    {
      overflow-wrap: break-word;
    }
    .container
    { 
       border-radius: 8px;
       width: 1200px;
       height: 100%;
      background: white;
    }
  </style>
</head>
<body>
	<section>
       <div class="container">

           <form method="POST" action="mailSend.php" id="my-form">
           	 <h1>Compose Email</h1>
             <div class="first-form-group">
                <label for="from">From</label>
                <input type="text" id="from" name="from" required>
             </div>
             <div class="form-group">
                <label for="sub">Subject</label>
                <input type="text" id="sub" name="sub" required>
             </div>
             <div class="form-group">
                <label for="To">To</label>       
                   <?php
                      echo "<p id='to'>$contain_email</p>";
                   ?>
             </div>
             <div class="last-form-group">
                <label for="message">Message</label>
                <textarea name="message" id="massage" cols="30" rows="7" required></textarea>
             </div> 
             <button type="submit" name="send-mail">SEND</button>
           </form>

       </div>
   </section>

</body>
</html>