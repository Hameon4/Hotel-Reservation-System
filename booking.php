<?php
  require 'header.php';
 ?>

<main>
  <script>
        function bill() {
        	  var x = document.getElementById('mySelect').selectedIndex;
            if (x == 1)
            	document.getElementById('price').value= 156*getDays();

            else if(x == 2)
            	document.getElementById('price').value = 320*getDays();

            else if(x == 3)
            	document.getElementById('price').value = 760*getDays();

            else if(x == 4)
            	document.getElementById('price').value = 500*getDays();
        }


        function getDays(){
                var checkout = new Date(document.getElementById("checkout").value);
                var checkin = new Date(document.getElementById("checkin").value);
                return parseInt((checkout - checkin) / (24 * 3600 * 1000));
        }

        function cal(){
          if(document.getElementById("checkout")){
              document.getElementById("numdays2").value=getDays();
          }
    	}

        function receipt(){
              let guest = {
                  username: document.getElementById('username').value,
                  checkinDate: document.getElementById('checkin').value,
  				        checkoutDate: document.getElementById('checkout').value,
                  numOfDays: document.getElementById('numdays2').value,
                  roomType: document.getElementById('mySelect').value,
                  roomNumber: document.getElementById('roomNum').value,
                  paymentType: document.getElementById('pay').value,
                  bill: document.getElementById('price').value
              }
                alert('RECEIPT: ' + '\n' + '\n' + 'Username: ' + guest.username + '\n'
                + 'Checkin Date: ' + guest.checkinDate + '\n' +
                'Checkout Date: ' + guest.checkoutDate + '\n' +
                'Number of Days: ' + guest.numOfDays + '\n' +
                'Room Type: ' + guest.roomType + '\n' +
                'Room Number: ' + guest.roomNumber + '\n' +
                'Payment Type: ' + guest.paymentType + '\n' +
                'Bill (AED): ' + guest.bill + '\n' + '\n' +
                'Thank you for booking to ADH!');
        }
</script>
  <div class="bookingDetails">
    <br><br><br><br><br><br>
    <h2 style="text-align: center; padding-top: 30px; font-size: 30px; font-family: arial;">Booking Details</h2>
  </div>
  <?php
  if ($_GET['booking'] == "success") {
      echo '<p class="signupsuccess" style="color: green; text-align: center;">Booking Successful. You will be contacted shortly for your bill.</p>';
  }

  else if(isset($_GET['error'])) {
    if($_GET['error'] == "emptyfields") {
        echo '<p class="signupsuccess" style="color: red; text-align: center;">Missing Required Fields.</p>';;
    }
  }
   ?>
  <form action="includes/booking.inc.php" method="post">

  <div class="formBox" style="padding-top: 60px; text-align: center;">
    Please type in the username as displayed in the placeholder <br><br>
    <label for="email">Username<sup style="color:red">*</sup> : </label>
    <input type="text" placeholder="<?php echo $_SESSION['userUid']; ?>" name="username" id="username"/><br><br><br>
    <hr>

      <label for="email">Checkin Date<sup style="color:red">*</sup> : </label>
      <input type="date" id="checkin" onchange="cal()" name="checkin-date" min=
        <?php
          echo date('Y-m-d');
        ?>
      /><br>

      <label for="email" style="padding-left: 30px;">Checkout Date<sup style="color:red">*</sup> : </label>
      <input type="date" id="checkout" onchange="cal()" name="checkout-date" min=
         <?php
          echo date('Y-m-d');
         ?>
      /><br>

      <label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays1"/>
  </div>
  <hr>

  <div class="formBox" style="padding-top: 30px; text-align: center;">
     <label>Choose a room type<sup style="color:red">*</sup> :</label>
    <select name="roomType" id="mySelect" onchange="bill()">
      <option selected disabled>-Select-</option>
      <option>Single</option>
      <option>Double</option>
      <option>King-Sized</option>
      <option>Family</option>
    </select><br>

    <label>Bill (AED): </label> <input type="text" id="price" name="numdays"/>
   <p></p>

    <label>Choose a room number:</label>
    <input type="number" name="roomNumber" id="roomNum" min="1" max="400"/><br>

    <label style="padding-left: 30px;">Choose your payment method<sup style="color:red">*</sup> :</label>
    <select name="payment-type" id="pay">
      <option selected disabled>-Select-</option>
      <option>Cash</option>
      <option>Credit/Debit</option>
    </select>
</div>
<button type="submit" onclick="receipt() "name="book-submit" style="margin-left: 650px; margin-bottom: 90px; margin-top: 80px;">Book Now</button>
</form>
</main>
