<?php
$servername = "localhost";
$username = "emmacula_database";
$ppassword = "emmaculate";
$dbname = "emmacula_database";
$conn = mysqli_connect($servername, $username, $ppassword, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>