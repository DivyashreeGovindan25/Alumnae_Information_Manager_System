<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');
    if(isset($_POST["search"])) 
    {
       
       //$search_data-->accessible;
       echo "<br>";
       if($selected=="type_name")
       {
              $sql1="SELECT  * FROM alumnae_details WHERE fname='".$search_data."' ";
                 $result1=mysqli_query($conn,$sql1);
                 if(mysqli_num_rows($result1))
                 {
                   while ($row=mysqli_fetch_assoc ($result1)) 
                  {
                      echo "<tr><td><input type='checkbox' name='idchk' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
                 else
                 {
                       echo "<script type='text/javascript'>
                           alert('NO ALUMNAE IS FOUND IN THIS NAME');
                       </script>";
                 }
       }
       if($selected=="type_reg")
       {
              $search_data_upper=strtoupper($search_data);
              $sql="SELECT  * FROM alumnae_details WHERE reg_no='".$search_data_upper."'";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='idchk' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO ALUMNAE IS FOUND WITH THIS REGISTER NUMBER');
                       </script>";
              }
       }
       if($selected=="type_batch")
       {
         $search_data_upper=strtoupper($search_data);
              $sql="SELECT * FROM alumnae_details WHERE batch='".$search_data_upper."' ";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='idchk' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO ALUMNAE IS FOUND WITH THIS BATCH ID');
                       </script>";
              }
       }
       if($selected=="type_department")
       {
         $search_data_upper=strtoupper($search_data);
              $sql="SELECT * FROM alumnae_details WHERE department='".$search_data_upper."' ";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='idchk' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO ALUMNAE IS FOUND WITH THIS BATCH ID');
                       </script>";
              }
       }
       if($selected=="type_year_of_passing")
       {
           $search_data_upper=strtoupper($search_data);
              $sql="SELECT * FROM alumnae_details WHERE yop='".$search_data_upper."' ";
                 $result2=mysqli_query($conn,$sql);
                 if(mysqli_num_rows($result2)>0)
                 {
                   while ($row=mysqli_fetch_assoc ($result2)) 
                  {
                      echo "<tr><td><input type='checkbox' name='idchk' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["fname"]. "</td><td>".$row["lname"]. "</td><td>".$row["reg_no"]. "</td><td>".$row["batch"]. "</td><td>".$row["dob"]. "</td><td>".$row["department"]."</td><td>".$row["yop"]."</td><td>".$row["email"]."</td><td>".$row["contact"]."</td><td>".$row["watsapp"]."</td><td>".$row["address"]."</td><td>".$row["city"]."</td><td>".$row["state"]."</td><td>".$row["zipcode"]."</td><td>".$row["occupation"]. "</td></tr>";
                  }
                  echo "</table>";
                 }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO ALUMNAE IS FOUND WITH THIS REGISTER NUMBER');
                       </script>";
              }
       }
              
    }
    else
    {
       echo"click search";
    }
?>