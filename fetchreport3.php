
<html>
 <title>
 </title>
  <head>
    <?php include 'meta.php' ?>
   <style>
  </style>
 </head>
 <body>
     <?php
include 'menu.php';
  ?>
   <div id='main'>
     <div>
  <?php 
   include 'auth.php';
   if($auth==0){
     echo "YOU ARE NOT AUTHORIZED TO PERFORM THIS ACTION";
   }
   else{
     ?>
   
    
    <?php
     include 'connect.php';
     include 'getsession.php';
    if($_SERVER["REQUEST_METHOD"]=="POST"){
     $regi=$_COOKIE['reg'];
       include 'connect.php';
       include 'getsession.php';
      $reg=$regi.'/'.$gsess.'/'.$gterm ;
      $prin=$_POST['prin'];
      $pstatus=$_POST['pstatus'];
      $teach=$_POST['teach'];
      $ca1=[$_POST["1ca1"],$_POST["1ca2"],$_POST["1ca3"],$_POST["1ca4"],$_POST["1ca5"],
      $_POST["1ca6"],$_POST["1ca7"],$_POST["1ca8"],$_POST["1ca9"],$_POST["1ca10"],
      $_POST["1ca11"],$_POST["1ca12"],$_POST["1ca13"],$_POST["1ca14"],$_POST["1ca15"],
      $_POST["1ca16"],$_POST["1ca17"],$_POST["1ca18"],$_POST["1ca19"],$_POST["1ca20"]];
      $ca2=[$_POST["2ca1"],
      $_POST["2ca2"],
      $_POST["2ca3"],
      $_POST["2ca4"],
      $_POST["2ca5"],
      $_POST["2ca6"],
      $_POST["2ca7"],
      $_POST["2ca8"],
      $_POST["2ca9"],
      $_POST["2ca10"],
      $_POST["2ca11"],
      $_POST["2ca12"],
      $_POST["2ca13"],
      $_POST["2ca14"],
      $_POST["2ca15"],
      $_POST["2ca16"],
      $_POST["2ca17"],
      $_POST["2ca18"],
      $_POST["2ca19"],
      $_POST["2ca20"]];
      $e=[$_POST["exam1"],
      $_POST["exam2"],
      $_POST["exam3"],
      $_POST["exam4"],
      $_POST["exam5"],
      $_POST["exam6"],
      $_POST["exam7"],
      $_POST["exam8"],
      $_POST["exam9"],
      $_POST["exam10"],
      $_POST["exam11"],
      $_POST["exam12"],
      $_POST["exam13"],
      $_POST["exam14"],
      $_POST["exam15"],
      $_POST["exam16"],
      $_POST["exam17"],
      $_POST["exam18"],
      $_POST["exam19"],
      $_POST["exam20"]];
      $st=[$_POST["st1"],
      $_POST["st2"],
      $_POST["st3"],
      $_POST["st4"],
      $_POST["st5"],
      $_POST["st6"],
      $_POST["st7"],
      $_POST["st8"],
      $_POST["st9"],
      $_POST["st10"],
      $_POST["st11"],
      $_POST["st12"],
      $_POST["st13"],
      $_POST["st14"],
      $_POST["st15"],
      $_POST["st16"],
      $_POST["st17"],
      $_POST["st18"],
      $_POST["st19"],
      $_POST["st20"]];
  $ft=[$_POST["ft1"],
      $_POST["ft2"],
      $_POST["ft3"],
      $_POST["ft4"],
      $_POST["ft5"],
      $_POST["ft6"],
      $_POST["ft7"],
      $_POST["ft8"],
      $_POST["ft9"],
      $_POST["ft10"],
      $_POST["ft11"],
      $_POST["ft12"],
      $_POST["ft13"],
      $_POST["ft14"],
      $_POST["ft15"],
      $_POST["ft16"],
      $_POST["ft17"],
      $_POST["ft18"],
      $_POST["ft19"],
      $_POST["ft20"]];
   $avg=[$_POST["avg1"],
      $_POST["avg2"],
      $_POST["avg3"],
      $_POST["avg4"],
      $_POST["avg5"],
      $_POST["avg6"],
      $_POST["avg7"],
      $_POST["avg8"],
      $_POST["avg9"],
      $_POST["avg10"],
      $_POST["avg11"],
      $_POST["avg12"],
      $_POST["avg13"],
      $_POST["avg14"],
      $_POST["avg15"],
      $_POST["avg16"],
      $_POST["avg17"],
      $_POST["avg18"],
      $_POST["avg19"],
      $_POST["avg20"]];
      $t=[$_POST["total1"],
      $_POST["total2"],
      $_POST["total3"],
      $_POST["total4"],
      $_POST["total5"],
      $_POST["total6"],
      $_POST["total7"],
      $_POST["total8"],
      $_POST["total9"],
      $_POST["total10"],
      $_POST["total11"],
      $_POST["total12"],
      $_POST["total13"],
      $_POST["total14"],
      $_POST["total15"],
      $_POST["total16"],
      $_POST["total17"],
      $_POST["total18"],
      $_POST["total19"],
      $_POST["total20"]];
      $g=[$_POST["grade1"],
      $_POST["grade2"],
      $_POST["grade3"],
      $_POST["grade4"],
      $_POST["grade5"],
      $_POST["grade6"],
      $_POST["grade7"],
      $_POST["grade8"],
      $_POST["grade9"],
      $_POST["grade10"],
      $_POST["grade11"],
      $_POST["grade12"],
      $_POST["grade13"],
      $_POST["grade14"],
      $_POST["grade15"],
      $_POST["grade16"],
      $_POST["grade17"],
      $_POST["grade18"],
      $_POST["grade19"],
      $_POST["grade20"]];
      $r=[$_POST["remark1"],
      $_POST["remark2"],
      $_POST["remark3"],
      $_POST["remark4"],
      $_POST["remark5"],
      $_POST["remark6"],
      $_POST["remark7"],
      $_POST["remark8"],
      $_POST["remark9"],
      $_POST["remark10"],
      $_POST["remark11"],
      $_POST["remark12"],
      $_POST["remark13"],
      $_POST["remark14"],
      $_POST["remark15"],
      $_POST["remark16"],
      $_POST["remark17"],
      $_POST["remark18"],
      $_POST["remark19"],
      $_POST["remark20"]];
      
      for($i=0;$i<21;$i++){
        $u=$i+1;
        $sql = "UPDATE `$reg` SET ca1='$ca1[$i]', ft='$ft[$i]', st='$st[$i]', avg='$avg[$i]', ca2='$ca2[$i]' , exam='$e[$i]', total='$t[$i]',
        grade='$g[$i]', remark='$r[$i]' WHERE id=$u";

if (mysqli_query($conn, $sql)) {

} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
      };
    $sqll="UPDATE students SET pc='$prin', tc='$teach',pstatus='$pstatus' WHERE reg_number='$regi'";
      if(mysqli_query($conn,$sqll)){
        echo 'RECORD FOR '.$regi.' FOR '. $gsess. ' SESSION , '. $gter. ' HAS BEEN UPDATED SUCCESSFULLY';
      }
      else{
        echo mysqli_error($conn);
      }
    }
    
?>
    <form method="post" action="<?php if($gterm==3) {echo 'record3.php' ;} else {echo'record.php' ;} ?>">
    <div class="input-group pb-1" style="margin-top:200px;">
      <span class="input-group-text " style="font-size:10px;">EMC/</span>
    <input type="text" name="reg_num" class="form-control text-success" style="outline:none;" placeholder="XX/XXXX"
        >   </div>
  <button type="submit" class="btn rounded btn-primary b float-end" style="width:30%;height:40px;margin-top:10px;background:navy;color:skyblue;border:none;margin-left:60%;border-radius:10px;">EDIT REPORT</button>
    </form>
   </div>
   </div>
   <?php
   }
   ?>
   <script src="emc2.js">
   </script>
 </body>
</html>
