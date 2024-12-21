<?php
include 'connect.php';
$name= $_COOKIE['fullname'];
$sql = "SELECT status FROM staffs WHERE fullname='$name'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
  if($row["status"]=="admin"){
    $auth = 1;
  }
    else{
      $auth=0;
    }
      
  }
}
  ?>