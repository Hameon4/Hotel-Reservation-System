<?php
 // if (isset($_SESSION['userId'])) {
   if(isset($_POST['book-submit'])) {
     require 'dbh.inc.php';

     $username = $_POST['username'];
     $checkinDate = $_POST['checkin-date'];
     $checkoutDate = $_POST['checkout-date'];
     $roomType = $_POST['roomType'];
     $paymentType = $_POST['payment-type'];
     $roomNumber = $_POST['roomNumber'];
     $numOfDays = $_POST['numDays1'];
     $bill = $_POST['numDays'];


     $sql = "INSERT INTO booking (uidUsers, checkinDate, checkoutDate, roomType, paymentType, roomNumber, numOfDays, bill) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
     $stmt = mysqli_stmt_init($conn);

     if(!mysqli_stmt_prepare($stmt, $sql)) {
       header("Location: ../booking.php?error=sqlerror");
       exit();
     }

     else {
       if (empty($username) || empty($checkinDate) || empty($checkoutDate) || empty($roomType) || empty($paymentType)
       || empty($roomNumber)) {
         header("Location: ../booking.php?error=emptyfields".$username);
         exit(); //This prevents any code below this to run incase the user makes an error in booking
       }

       else {
       mysqli_stmt_bind_param($stmt, "ssssssss", $username, $checkinDate, $checkoutDate, $roomType, $paymentType, $roomNumber, $numOfDays, $bill);
       mysqli_stmt_execute($stmt);
       // mysqli_stmt_store_result($stmt); for fecthing from database purposes
       header("Location: ../booking.php?booking=success");
       exit();
     }
     }
   }
 //}
