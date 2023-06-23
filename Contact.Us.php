<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css\contact.css" />
    <title>contact us</title>
    <style type="text/css">
        .success
       {
          background-color: #99e699;
          color: black;
          width:980px;
          height: 40px;
          margin-left: 250px;
          margin-top: 5px;
          font-size: 15px;
          border-radius: 5px;
          text-align: center;
          justify-content: center;
          padding-top: 9px;
       }
       .success h3
       {
         margin-top: 5px;
       }
    </style>
</head>
<body>
    <div class="heading-container"> 
        <a href="index.php"><img src="image/backBlack.png" width="90px" height="80px"></a>
        <h1 class="heading">Contact Us</h1>
    </div>
                  <?php
                      $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                      if(strpos($fullUrl,"contact=submitted")==true)
                      {
                        echo "<div class='success'><h3>YOUR CONTACT SUBMITTED SUCCESSFULLY</h3></div>";
                      }
                  ?>
    <div class="wrapper">
     <div class="container">
        
        <div class="contact-info">
            <h1>Contact Info</h1>
            <i class="material-icons">place</i>
            <span>Women's Christian Collge<br/>#51,college road<br/>Chennai-600006<br/>Tamil Nadu,India</span><br/>
            <i class="material-icons">email</i>
            <span>info@wcc.edu.in</span><br />
            <i class="material-icons">phone</i>
            <span>+91 44 2827 5926</span><span id="call-sec-num">+91 44 2823 1676</span>
        </div>

        <div class="contact">
            <h1 class="heading-send-message">Send Message</h1>
            <form method="POST" action="php\Contact.db.php">
                <span class="inputbox">
                    <input type="text" name="name"required >
                    <span class="inputname">Name</span>
                </span>
                <span class="inputbox">
                    <input type="text" name="reg_no" required>
                    <span class="inputname">Register Number</span>
                </span><br/>
                <span class="inputbox">
                    <input type="text" name="email"required>
                    <span class="inputname">Email Address</span>
                </span><br/>
                <span class="inputbox">
                    <textarea cols="30" rows="2" name="message" required></textarea>
                    <span class="textname">Your message here</span> </span><br />
                 <button type="submit" class="submit" name="submit-contact">Send Message</button>
            </form>
        </div>
    </div>
    </div>
</body>

</html>