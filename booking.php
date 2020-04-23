<?php
  require 'header.php';
 ?>

<main>
  <script>
 function bill() {
        	var x = document.getElementById('mySelect').selectedIndex;
            if (x == 1)
            	document.getElementById('price').value= 100*getDays();

            else if(x == 2)
            	document.getElementById('price').value = 200*getDays();

            else if(x == 3)
            	document.getElementById('price').value = 300*getDays();

            else if(x == 4)
            	document.getElementById('price').value = 400*getDays();
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
</script>
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
    <input type="text" placeholder="Username" name="username" id="username"/><br><br><br>

      <label for="email">Checkin Date: </label>
      <input type="date" id="checkin" onchange="cal()" name="checkin-date" min=
        <?php
          echo date('Y-m-d');
        ?>
      />

      <label for="email" style="padding-left: 30px;">Checkout Date: </label>
      <input type="date" id="checkout" onchange="cal()" name="checkout-date" min=
         <?php
          echo date('Y-m-d');
         ?>
      />

      <label class="form">Number of days:</label><input type="text" class="textbox" id="numdays2" name="numdays1"/>
  </div>

  <div class="formBox" style="padding-top: 30px; text-align: center;">
     <label>Choose a room:</label>
    <select name="roomType" id="mySelect" onchange="bill()">
      <option selected disabled>-Select-</option>
      <option>Single</option>
      <option>Double</option>
      <option>King-Sized</option>
      <option>Family</option>
    </select>

    <label>Bill (AED): </label> <input type="text" id="price" name="numdays"/>
   <p></p>

    <label>Choose a room number:</label>
    <input type="number" placeholder="Room Number" name="roomNumber" id="roomNum" min="1" max="400"/>

    <label style="padding-left: 30px;">Choose your payment method:</label>
    <select name="payment-type" id="pay">
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
