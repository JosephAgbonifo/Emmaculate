<?php
$sql = "SELECT session, term FROM Session";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $gsess=$row["session"];
    $gterm=$row["term"];
  }
} else {
  echo "0 results";
}
if($gterm==1){
  $gter='1st term';
  $gex='FIRST TERM EXAMINATION RESULT';
}
else if ($gterm==2){
  $gter='2nd term';
 $gex='SECOND TERM EXAMINATION RESULT';
}
else if ($gterm==3){
 $gter='3rd term';
}
?>
