<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"updated")==true)
   {
      echo "<script type='text/javascript'>
              alert('EVENT POSTED ON THE WEBSITE');
            </script>";
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>POST EVENT</title>
	<link rel="stylesheet" type="text/css" href="css/postevent.css">
  <style type="text/css">
    @import url('https://fonts.googleapis.com/icon?family=Material+Icons');
    .container form .form-group2 .container2 
{
  width: 60%;
  margin: -41px 30px 15px 300px;
  float: right;
}
.container form .form-group2 .container2  .select-container 
{
  padding: 10px;
  border: 2px solid #b02ed3;
  position: relative;
  border-radius: 3px;
  background: #fff;
  margin-top: 50px;
  width: 150px;
  margin-right: -220px;
}
.container form .form-group2 .container2 .select-container select 
{
  width: 100%;
  border: 0;
  background: transparent;
  font-size: 16px;
  outline: none;
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
}
.container form .form-group2 .container2  .select-container:after 
{
  content: 'keyboard_arrow_down';
  font-family: 'material icons';
  font-size: 24px;
  color: #666;
  position: absolute;
  right: 10px;
  top: 50%;
  transform: translateY(-50%);
  pointer-events: none;
}
    section
    {
       width: 100%;
       height: 110vh;
    }
    #to
    {
      overflow-wrap: break-word;
    }
    .container
    { 
       border-radius: 8px;
       width: 1200px;
       height: 100vh;
      background: white;
    }
    .form-group2
    {
       display: flex;
       font-size: 20px;
    }
  </style>
</head>
<body>
	<section>
       <div class="container">

           <form method="POST" action="php\postevent.db.php" id="my-form">
           	 <h1>POST EVENT</h1>
             <div class="first-form-group">
                <label for="from">Event Name</label>
                <input type="text" id="from" name="eve-name" required>
             </div>
             <div class="form-group">
                <label for="sub">Venue</label>
                <input type="text" id="sub" name="venue" required>
             </div>
             <div class="form-group">
                <label for="sub">Date</label>
                <input type="date" id="sub" name="date" required>
             </div><br><br>

             <div class="form-group2">
                <label for="sub">Event number</label>
                <div class="container2">
               <div class="select-container">
                   <select name="options">
                     <option value="" disabled selected>Event number</option>
                     <option value="event1">Event 1</option>
                     <option value="event2">Event 2</option>
                     <option value="event3">Event 3</option>
                   </select>    
               </div>
             </div>

             </div>
             <div class="last-form-group">
                <label for="message">Description</label>
                <textarea name="description" id="massage" cols="30" rows="7" required></textarea>
             </div> 
             <button type="submit" name="post-event">POST EVENT</button>
           </form>

       </div>
   </section>

</body>
</html>