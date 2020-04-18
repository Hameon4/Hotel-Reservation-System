<!-- closing tag of php is not needed if you're writing pure php code only -->
<?php
// This grabs data from the user
if (isset($_POST['signup-submit'])) {

  require 'dbh.inc.php';

  // fetch the information from the form when the user signs in the website
  $username = $_POST['uid'];
  $email = $_POST['mail'];
  $password = $_POST['pwd'];
  $passwordRepeat = $_POST['pwd-repeat'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $phoneNumber = $_POST['phoneNumber'];

  // check if the user makes an error
  //check if the user left something empty
  if (empty($username) || empty($email) || empty($password) || empty($passwordRepeat)) {
    //send the user back to the sign up page
    header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
    exit(); //This prevents any code below this to run incase the user makes an error in signup

  }

  else if(!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
    header("Location: ../signup.php?error=invalidmailuid");
    exit();
  }
  //checks if the email is invalid
  else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&uid=".$username);
    exit();
  }

  //checks if the username is invalid
  else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
    header("Location: ../signup.php?error=invaliduid&mail=".$email);
    exit();
  }

  //if two passwords don't match each other
  else if ($password !== $passwordRepeat) {
    header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
    exit();
  }

  //if the user tries to sign in using a username already existing in a database
  else {
    $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
    $stmt = mysqli_stmt_init($conn);

    //check if the above sql code works or not
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: ../signup.php?error=sqlerror");
        exit();
    }
    //Else if not errors, go and put the data in the database
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if($resultCheck > 0) {
          header("Location: ../signup.php?error=usertaken&mail=".$email);
          exit();
      }
      else {
        $sql = "INSERT INTO users (uidUsers, emailUsers, pwdUsers, firstName, lastName, phoneNumber) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }

        else {
          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssssss", $username, $email, $hashedPwd, $firstName, $lastName, $phoneNumber);
          mysqli_stmt_execute($stmt);
          // mysqli_stmt_store_result($stmt); for fecthing from database purposes
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);
}
else {
  header("Location: ../signup.php");
  exit();
}
