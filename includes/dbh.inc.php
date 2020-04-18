<?php

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystemhotel";

// Making the connection to the database...
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//Check if there's a failure in connection with the database
if (!$conn){
  die("Conection Failed: ".mysqli_connect_error());
}
