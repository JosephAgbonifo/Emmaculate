<?php
$servername = "localhost";
$username = "emmacula_database";
$password = "emmaculate";
try {
  $conn = new PDO("mysql:host=$servername;dbname=emmacula_database", $username, $password);
    // set the PDO error mode to exception
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // sql to create table
  $sql = "CREATE TABLE Session (
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  session VARCHAR(30) NOT NULL,
  term VARCHAR(50) NOT NULL,
  last_updated TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
   // use exec() because no results are returned
  $conn->exec($sql);
  echo "Table user created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>