<?php
   $fullUrl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
   if(strpos($fullUrl,"selected=nil")==true)
   {
      echo "<script type='text/javascript'>
              alert('SELECT DATA TO DELETE');
            </script>";
   }
   if(strpos($fullUrl,"Deleted=success")==true)
   {
      echo "<script type='text/javascript'>
              alert('DATA DELETED SUCCESSFULLY');
            </script>";
   }
   if(strpos($fullUrl,"Email=Invalid")==true)
   {
      echo "<script type='text/javascript'>
              alert('EMAIL INVALID');
            </script>";
   }
   if(strpos($fullUrl,"StaffAdded=success")==true)
   {
      echo "<script type='text/javascript'>
              alert('STAFF ADDED SUCCESSFULLY');
            </script>";
   }
   if(strpos($fullUrl,"Staff=ALREADYEXIST")==true)
   {
      echo "<script type='text/javascript'>
              alert('THIS STAFF ALREADY EXIST');
            </script>";
   }
   if(strpos($fullUrl,"phonenumber=Invalid")==true)
   {
      echo "<script type='text/javascript'>
              alert('CONTACT NUMBER INVALID');
            </script>";
   }
   if(strpos($fullUrl,"someField=missing")==true)
   {
      echo "<script type='text/javascript'>
              alert('PLEASE PROVIDE BASIC FIELDS TO ADD STAFF');
            </script>";
   }
   if(strpos($fullUrl,"selectedup=nil")==true)
   {
      echo "<script type='text/javascript'>
              alert('SELECT STAFF TO UPDATE');
            </script>";
   }
   if(strpos($fullUrl,"Update=success")==true)
   {
      echo "<script type='text/javascript'>
              alert('STAFF DETAILS UPDATED SUCCESSFULLY');
            </script>";
   }
   if(strpos($fullUrl,"NOID=EXIST")==true)
   {
      echo "<script type='text/javascript'>
              alert('NO STAFF EXIST WITH THIS ID');
            </script>";
   }
   if(strpos($fullUrl,"NOID=EXIST")==true)
   {
      echo "<script type='text/javascript'>
              alert('NO STAFF EXIST WITH THIS ID');
            </script>";
   }
?>