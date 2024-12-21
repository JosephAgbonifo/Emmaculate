<?php
include 'connect.php';
$cars = array(69);
foreach ($cars as $i)
{
	echo 'wow';
$red= 'EMC/23/00'.$i.'/2024/2025/1';
$sqlll = "CREATE TABLE `$red` (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
subject VARCHAR(30) NOT NULL,
ca1 VARCHAR(30),
ca2 VARCHAR(30),
exam VARCHAR(50),
total VARCHAR(50),
grade VARCHAR(50),
remark VARCHAR(50),
position VARCHAR(50)
)";
if (mysqli_query($conn, $sqlll))
 {
  echo "•REGISTRATION INITIATED BY SYSTEM ON ". strtoupper(date("Y-M-d---h:i:sa")) . "<br />";
 }
else
 {
echo  ' an issue';
 }
$subjects = array("Mathematics","English","Physics","Chemistry","Biology",
                      "Agric","Data processing","Computer","Civic Education","Financial Accounting",
                      "Commerce","CRK/IRK","Government","Literature in English","Marketing","Economics",
                      "Further Mathematics","Geography","Yoruba");
  foreach($subjects as $subject)
 {
    $sql = "INSERT INTO `$red` (subject)
VALUE ('$subject')";
if ($conn->query($sql) === TRUE)
  {
  echo $res." is all set";
  } else
  {
  echo "Error: " . $sql . "<br>" . $conn->error;
   }
  }
}
?>
