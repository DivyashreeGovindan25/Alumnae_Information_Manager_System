<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css\Alumnae.Information.css">
  <style type="text/css"> 
  </style>
  <title>Sign up</title>
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
            <li><a href="Alumnae.Login.php">Log In</a></li>
        </ul> 
       <h4>SIGN UP</h4> 
    </nav> 
  </div>

  <div class="body-wrapper">

    <form method="POST" action="php\Alumnae.Signup.db.php">
       <span class="input-wrapper">
              <span class="inputbox">
                  <div>
                    <label>FIRST NAME</label>
                    <input type="text" required name="fname" placeholder="Enter your first name">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>LAST NAME</label>
                    <input type="text"  name="lname" placeholder="Enter your last name">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>REGISTER NUMBER</label>
                    <input type="text" required name="reg_no" placeholder="Enter your register number">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>BATCH</label>
                    <input type="text" required name="batch" placeholder="Enter your batch">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>DATE OF BIRTH</label>
                    <input type="date" required name="dob" placeholder="Enter date of birth">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>DEPARTMENT</label>
                    <input type="text" required name="department" placeholder="Enter your Department">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>YEAR OF PASSING</label>
                    <input type="text" maxlength="4" minlength="4"  required name="year_of_passing" placeholder="Enter your year of passing out">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>E-MAIL ID</label>
                    <input type="email" required="" name="email" placeholder="Enter your mail id">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>CONTACT NUMBER</label>
                    <input type="text"  minlength="10" pattern="[1-9]{1}[0-9]{9}" required="" name="p-no" placeholder="Enter your contact number">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>WATSAPP NUMBER</label>
                    <input type="text"  minlength="10" pattern="[1-9]{1}[0-9]{9}"  name="w-no" placeholder="Enter your watsapp number">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>ADDRESS</label>
                   <textarea cols="8" rows="2"  name="address" placeholder="Enter your residential address"></textarea>
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>CITY</label>
                    <input type="text"  name="city" placeholder="Enter city">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>STATE</label>
                     <input type="text"  name="state" placeholder="Enter state">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>ZIP CODE</label>
                    <input type="text" name="zip_code" placeholder="Enter zipcode">
                  </div>
              </span><br/>
              <span class="inputbox">
                  <div>
                    <label>OCCUPATION</label>
                    <input type="text" name="occupation" placeholder="Enter occupation">
                  </div>
              </span><br/>
              <button type="submit" name="submit-signup" class="submit">Sign up</button><br>
       </span>
      
    </form>

   </div>

  </div>

</body>
</html>