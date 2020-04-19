<?php
  require 'header.php';
 ?>

<main>
  <div class="bookingDetails">
    <br><br><br><br><br><br>
    <h2 style="text-align: center; padding-top: 30px; font-size: 30px; font-family: arial;">Booking Details</h2>
  </div>
  <?php
  if ($_GET['signup'] == "success") {
      echo '<p class="signupsuccess" style="color: green; text-align: center;">Booking Successful. You will be contacted shortly for your bill.</p>';
  }
   ?>
  <form action="includes/booking.inc.php" method="post">

  <div class="formBox" style="padding-top: 60px; text-align: center;">
    <label for="email">Username: </label>
    <input type="text" placeholder="Username" name="username"/><br><br><br>

      <label for="email">Checkin Date: </label>
      <input type="date" placeholder="Days" name="checkin-date" min=
        <?php
          echo date('Y-m-d');
        ?>
      />

      <label for="email" style="padding-left: 30px;">Checkout Date: </label>
      <input type="date" placeholder="Days" name="checkout-date" min=
         <?php
          echo date('Y-m-d');
         ?>
      />
  </div>

  <div class="formBox" style="padding-top: 30px; text-align: center;">
     <label>Choose a room:</label>
    <select name="roomType">
      <option selected disabled>-Select-</option>
      <option>Single</option>
      <option>Double</option>
      <option>King-Sized</option>
      <option>Family</option>
    </select>

    <label>Choose a room:</label>
    <input type="number" placeholder="Room Number" name="roomNumber" min="1" max="400"/>

    <label style="padding-left: 30px;">Choose your payment method:</label>
    <select name="payment-type">
      <option selected disabled>-Select-</option>
      <option>Cash</option>
      <option>Credit/Debit</option>
    </select>
</div>
<button type="submit" name="book-submit" style="margin-left: 650px; margin-bottom: 90px; margin-top: 80px;">Book Now</button>
</form>
</main>

 <?php
 require 'footer.php';
  ?>
