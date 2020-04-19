<?php
  include_once 'includes/dbh.inc.php';
  require 'header.php';
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <style media="screen">
       h1 {
         margin-top: 150px;
         text-align: center;
       }

       h2 {
         margin-top: 40px;
       }

       table {
         border-collapse: collapse;
         width: 100%;
         color: green;
         font-size: 15px;
         text-align: center;
       }

       th {
         background-color: green;
         color: white;
       }

       tr:nth-child(even) {
         background-color: #f2f2f2;
       }
     </style>

     <h1>Admin Panel</h1>
     <table>
      <h2>Customer's Personal Info</h2>
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
          $sql = "SELECT * FROM users;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>". $row["idUsers"] ."</td><td>". $row["uidUsers"] ."</td><td>".
              $row["emailUsers"] ."</td><td>". $row["pwdUsers"] ."</td><td>". $row["firstName"]
              ."</td><td>". $row["lastName"] ."</td><td>". $row["phoneNumber"] ."</td></tr>";
            }
              echo "</table>";
          }
          else {
            echo "0 result";
          }
        ?>
     </table>

     <table>
      <h2>Customer's Booking Details</h2>
       <tr>
         <th>Id</th>
         <th>Username</th>
         <th>Checkin Date</th>
         <th>Checkout Date</th>
         <th>Room Type</th>
         <th>Payment Type</th>
         <th>Room Number</th>
       </tr>
       <?php
          $sql = "SELECT * FROM booking;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              echo "<tr><td>". $row["idUsers"] ."</td><td>". $row["uidUsers"] ."</td><td>".
              $row["checkinDate"] ."</td><td>". $row["checkoutDate"] ."</td><td>". $row["roomType"]
              ."</td><td>". $row["paymentType"] ."</td><td>" .$row["roomNumber"] ."</td></tr>";
            }
              echo "</table>";
          }
          else {
            echo "0 result";
          }
        ?>
     </table>
     <br><br><br><br><br><br><br><br>

   </body>
 </html>
