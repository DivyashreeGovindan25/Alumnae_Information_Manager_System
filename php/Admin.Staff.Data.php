<?php
  $conn=mysqli_connect('localhost','root','','phpdatabases');
    if(isset($_POST["search"])) 
    {
       
       //$search_data-->accessible;
       echo "<br>";
       if($selected=="type_name")
       {
              $sql="SELECT * FROM staff_details WHERE name='".$search_data."' ";
              $result2=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result2)>0)
              {
                 while ($row=mysqli_fetch_assoc ($result2)) 
                {
                    echo "<tr><td><input type='checkbox' name='idcheck' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["name"]. "</td><td>".$row["email"]. "</td><td>".$row["phone"]. "</td><td>".$row["staff_id"]. "</td><td>".$row["pwd"]. "</td></tr>";
                }
                echo "</table>";
              }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO STAFF IS FOUND IN THIS NAME');
                       </script>";
              }
       }
       if($selected=="type_id")
       {
              $search_data_upper=strtoupper($search_data);
              $sql="SELECT * FROM staff_details WHERE staff_id='".$search_data."' ";
              $result2=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result2)>0)
              {
                 while ($row=mysqli_fetch_assoc ($result2)) 
                {
                    echo "<tr><td><input type='checkbox' name='idcheck' value=".$row["id"]."></td><td>".$row["id"]. "</td><td>".$row["name"]. "</td><td>".$row["email"]. "</td><td>".$row["phone"]. "</td><td>".$row["staff_id"]. "</td><td>".$row["pwd"]. "</td></tr>";
                }
                echo "</table>";
              }
              else
              {
                  echo "<script type='text/javascript'>
                           alert('NO STAFF IS FOUND WITH THIS STAFF ID');
                       </script>";
              }
       }
              
    }
    else
    {
       echo"click search";
    }
    

?>