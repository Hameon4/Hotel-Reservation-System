<?php

if (isset($_POST['login-submit'])) {
  require 'dbh.inc.php';

  //give user option to use either email or username
  $mailuid = $_POST['mailuid'];
  $password = $_POST['pwd'];

  //check if any of the two fields are empty
  if (empty($mailuid) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  //else check the database if existing
  else {
    $sql = "SELECT * FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);

    //check for errors
    if(!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../index.php?error=sqlerror");
      exit();
    }

    else {
      mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      if ($row = mysqli_fetch_assoc($result)) {
        $pwdCheck = password_verify($password, $row['pwdUsers']);
        if ($pwdCheck == false) {
          header("Location: ../index.php?error=wrongpwd");
          exit();
        }

        //log the user to the website
        else if($pwdCheck == true) {
          session_start();
          $_SESSION['userId'] = $row['idUsers'];
          $_SESSION['userUid'] = $row['uidUsers'];

          header("Location: ../index.php?login=success");
          exit();
        }

        else {
          header("Location: ../index.php?error=sqlerror");
          exit();
        }
      }
      else {
        header("Location: ../index.php?error=nouser");
        exit();
      }
    }
  }
}

else {
  header("Location: ../index.php");
  exit();
}
