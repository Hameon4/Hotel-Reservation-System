<?php
 // if (isset($_SESSION['userId'])) {
   if(isset($_POST['book-submit'])) {
     require 'dbh.inc.php';

     $username = $_POST['username'];
     $checkinDate = $_POST['checkin-date'];
     $checkoutDate = $_POST['checkout-date'];
     $roomType = $_POST['roomType'];
     $paymentType = $_POST['payment-type'];



     $sql = "INSERT INTO booking (uidUsers, checkinDate, checkoutDate, roomType, paymentType) VALUES (?, ?, ?, ?, ?)";
     $stmt = mysqli_stmt_init($conn);

     if(!mysqli_stmt_prepare($stmt, $sql)) {
       header("Location: ../signup.php?error=sqlerror");
       exit();
     }

     else {

       mysqli_stmt_bind_param($stmt, "sssss", $username, $checkinDate, $checkoutDate, $roomType, $paymentType);
       mysqli_stmt_execute($stmt);
       // mysqli_stmt_store_result($stmt); for fecthing from database purposes
       header("Location: ../index.php?signup=success");
       exit();
     }
   }
 //}
