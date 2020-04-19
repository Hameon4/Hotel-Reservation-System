<?php
  require "header.php";
 ?>

 <main class="formSignup">
   <h1 style="text-align: center; padding-top: 120px;">Signup</h1><br>
   <?php
    if (isset($_GET['error'])) {
      if ($_GET['error'] == "emptyfields") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Fill in all fields</p>';
      }
      else if ($_GET['error'] == "invaliduidmail") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Invalid username and e-mail</p>';
      }
      else if ($_GET['error'] == "invaliduid") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Invalid username</p>';
      }
      else if ($_GET['error'] == "invalidmailuid") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Invalid email</p>';
      }
      else if ($_GET['error'] == "passwordcheck") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Unmatched passwords</p>';
      }
      else if ($_GET['error'] == "usertaken") {
        echo '<p class="signuperror" style="color: red; text-align: center;">Username is already taken</p>';
      }
    }

    else if ($_GET['signup'] == "success") {
        echo '<p class="signupsuccess" style="color: green; text-align: center;">Signup Successful</p>';
    }
    ?>
   <form action="includes/signup.inc.php" method="post">
     <div style="text-align: center;">
       <h2 style="text-align: center; padding-top: 30px; font-size: 30px; font-family: arial;">Personal Information</h2><br>
       Enter your First Name: <input type="text" name="firstName" placeholder="First Name">
       Enter your Last Name: <input type="text" name="lastName" placeholder="Last Name"><br><br>
       Enter your Phone Number: <input type="text" name="phoneNumber" placeholder="Phone Number">
       Enter your username: <input type="text" name="uid" placeholder="Username"><br><br>
       Enter your email: <br> <input type="text" name="mail" placeholder="E-mail"><br><br>
       Enter your password: <br> <input type="password" name="pwd" placeholder="Password"><br><br>
       Re-enter your password: <br> <input type="password" name="pwd-repeat" placeholder="Repeat password"><br><br>
   </div>


   <button type="submit" name="signup-submit" style="margin-left: 650px; margin-bottom: 90px; margin-top: 80px;">Signup</button>
   </form>
 </main>

<?php
  require "footer.php";
 ?>
