<?php
$nclass=$class[0];
if($nclass=="JSS1" or $nclass=="JSS2" or $nclass=="JSS3")
      {$sect="JSS";}
      else {$sect="SSS";};
echo "<strong>KEY TO GRADE</strong>";
if ($sect=="JSS"){
 echo  "<div style='font-size:8px;' class='row'>
 <div class='col'>
 A = 70% - 100% (EXCELLENT)<br />
 B = 60% - 69% (VERY GOOD)<br />
 C = 50% - 55% (GOOD)
 </div>
 <div class='col'>
 D = 45% - 49% (FAIRLY GOOD)<br />
 E = 40% - 44% (FAIR)<br />
 F = 40% - 0% (POOR)
 </div>
 </div>"; 
}
else{
  echo "<div style='font-size:8px;' class='row'>
 <div class='col'>
 A1 = 75% - 100% (EXCELLENT)<br />
 B2 = 70% - 74% (VERY GOOD)<br />
 B3 = 65% - 69% (GOOD)<br />
 C4 = 60% - 64% (CREDIT) <br />
 C5 = 55% - 59% (CREDIT)
 </div>
 <div class='col'>
 C6 = 50% - 54% (CREDIT)<br />
 D7 = 45% - 49% (FAIR)<br />
 E8 = 40% - 44% (PASS) <br />
 F9 = BELOW 40% (FAIL)
 </div>
 </div>";
}
?>