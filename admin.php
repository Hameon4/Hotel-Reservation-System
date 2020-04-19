<?php
  require 'header.php';
 ?>

 <main>
   <table>
     <tr>
       <th>Id</th>
       <th>Username</th>
       <th>Email</th>
       <th>Password</th>
       <th>First Name</th>
       <th>Last Name</th>
       <th>Phone Number</th>
     </tr>

     <?php
      require 'dbh.inc.php';
      if($conn-> connect_error){
        die("Connection Failed:". $conn-> connect_error);
      }

      $sql = "SELECT idUsers, uidUsers, emailUsers, pwdUsers, firstName, lastName, phoneNumber from users";
      $result = $conn-> query($sql);
    if ($result-> num_rows > 0) {
      while ($row = $result-> fetch_assoc()) {
        echo "<tr><td>". $row["idUsers"] ."</td><td>". $row["uidUsers"] ."</td><td>".
        $row["emailUsers"] ."</td><td>". $row["pwdUsers"] ."</td><td>". $row["firstName"]
        ."</td><td>". $row["lastName"] ."</td><td>". $row["phoneNumber"] ."</td></tr>";
      }
      echo "</table>";
    }

    else {
      echo "0 result";
    }
    $conn-> close();
      ?>

   </table>
 </main>

 <?php
 require 'footer.php';
  ?>
