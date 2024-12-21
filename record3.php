<html>
 <title>
 </title>
 <head>
 <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/db7a93c41c.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Latest compiled JavaScript -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
<link rel="stylesheet" href="emc.css">
   <link rel="stylesheet" href="emc2.css">
 
 </head>
  <?php
  if(!isset($_POST['reg_num'])){
    $ac=$_GET['access'];
    $stud=$_GET["reg"];
    include 'connect.php';
    $sql = "SELECT pin, checked FROM students WHERE reg_number='$stud'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    if($ac==$row['pin']){
      if($row['checked']!=0){
      $che=$row['checked']-1;
      $student=$stud;
      $sqil = "UPDATE students SET checked='$che' WHERE reg_number='$stud'";
if (mysqli_query($conn, $sqil)) {
  echo "";
} else {
}   
      }
      else{
        echo '<div class="alert alert-danger" >NUMBER OF CHECKS EXCEEDED, YOU CANT CHECK THIS RESULT AGAIN</div>';
      }
    }
    else{
      echo '<div class="alert alert-danger">ACCESS BLOCKED BY SECURITY</div>';
    }
  }  
}
  
  }
              else {
                $student="EMC/" .$_POST["reg_num"];
              }
   include 'connect.php';
  include 'getsession.php';
  $studentes=$student.'/'.$gsess.'/'.$gterm;
    setcookie('reg', $student, time() + (86400 * 1), "/");
    for($i=1;$i<21;$i++){
    };
     $name=[];
     $class=[];
    $sex=[];
    $img=[];
    $tc=[];
    $pc=[];
$pstatus=[];
     $sqll="SELECT fullname, class,sex,tc, pc, pstatus, img FROM students WHERE reg_number='$student'";
     $res=mysqli_query($conn, $sqll);
     if(mysqli_num_rows($res) > 0)
     {
     while( $rest=mysqli_fetch_assoc($res)){
       array_push($name,$rest["fullname"]);
       array_push($class,$rest["class"]);
       array_push($sex,$rest["sex"]);
       array_push($img, $rest["img"]);
       array_push($pstatus,$rest["pstatus"]);
       array_push($tc, $rest['tc']);
       array_push($pc,$rest['pc']);
     }
         if($pc[0]==""){
           $pcc="TOUCH ME TO EDIT THIS";
         }
       else {
         $pcc=$pc[0];
            }
       if($tc[0]==""){
         $tcc="TOUCH ME TO EDIT THIS";
       }
       else{
         $tcc=$tc[0];
          
         }
                          

     }
      $sql = "SELECT subject, st, ft, avg, ca1, ca2, exam, total, grade, remark, position  FROM `$studentes`";
$result = mysqli_query($conn, $sql);
    $subjects=[];
    $ca1=array();
    $ca2=array();
    $e=array();
    $t=array();
    $g=array();
    $r=array();
    $p=array();
  $st=array();
  $ft=array();
  $avg=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push($subjects,$row["subject"]);
    array_push($ca1,$row["ca1"]);
    array_push($ca2,$row["ca2"]);
    array_push($st,$row["st"]);
    array_push($ft,$row["ft"]);
    array_push($avg,$row['avg']);
    array_push($e,$row["exam"]);
    array_push($t,$row["total"]);
    array_push($g,$row["grade"]);
    array_push($r,$row["remark"]);
    array_push($p,$row["position"]);
  }
} else {
  echo "<div class='alert alert-danger container-fluid'>
STUDENT WITH THE PROVIDED CODE DOES NOT EXIST <br > PLS, CHECK CODE AND TRY AGAIN.
</div>";
}
    $n=[];
    $obtained=array_sum($avg);
    for($i=0;$i<count($avg);$i++){
      if($avg[$i]!=0){
      array_push($n,$avg[$i]);
      }
      else {
     
      };
      
    };
    $obtainable=count($n) * 100;
    $per=round(($obtained/$obtainable)*100);
  ?>
 <body style="padding-top:10%;">
 <div id="sheet" class="m-auto" >
  <div class="row">
   <div class="col-3">
   <img width="100%" class="float-start" src="emc.png">
   </div>
      <div id="em" class="col-6 text-center pt-2">
    <strong><h2>
    DE-EMMACULATE COLLEGE
   </h2>
   </strong>
   <p style="font-size:10px;">
  <i class="fa fa-map-marker" aria-hidden="true"></i> 2, ibikunle street Wasimi by Underbridge, opposite Power line, Mile 12, Lagos, Nigeria 
   <br />
 <i class="fa-solid fa-phone"></i>07064369964, 08138051390
  <br />
 <i class="fa-solid fa-envelope"></i> emmaculatecollege19@gmail.com
   </p>
     <strong><h5 class="mt-2 text-warning">THIRD TERM EXAMINATION RESULT </h5></strong>
   </div>
      <div class="col-3">
   <img width="150px" height="150px" class="float-end" src="<?php echo $img[0] ;?>">
  </div>
  <div style="width:70%; font-size:8px;" class=" m-auto pb-1 text-center">
  <h5><strong>NAME : </strong><?php echo $name[0] ;?></h5>
    <h5 class="float-start"><strong>CLASS : </strong><span id="class"><?php echo $class[0] ;?></span> </h5>
  <h5 class="float-end"><strong>TERM : </strong> <?php echo $gter ?></strong> </h5>
  <br />
    <div class='row container-fluid'>
      <div class='col'>
        <h6 ><strong>REG_NUM : </strong><?php echo $student ;?>
        </h6>
      </div>
      <div class='col'>
        <h6><strong>SEX :</strong> <span id='sex'><?php echo $sex[0] ; ?></span></h6>
      </div>
    </div>
 
    <h6 ><strong>SESSION : </strong><?php echo $gsess ; ?>        </h6>
    
    <h6>NEXT TERM BEGINS : 9<sup>th</sup> September 2024 </h6>
    </div>
    <form action="<?php echo "fetchreport3.php" ?>" method="post">
    <?php 
    include 'table3.php';
    ?>
     <div style="width:80%" class="row m-auto  text-center">
  <div class="col-6">
  <?php 
    include "marks.php";
    ?>
  </div>
   <div class="col-6">
   <?php 
     include 'keytograde.php';
     ?>
  </div>
  </div>
  <?php 
      include "com.php";
      ?>
   <div style="width:80%; text-align:left" class="container-fluid m-auto  row">
   <div class="col text-left" style="">
   <strong>
   DATE : <span style="padding-left:00px;padding-right:0px;border-bottom:2px solid black;width:50px;"><?php echo date("l jS \of F Y");?></span>
   </strong>
   </div>
      <div class="col text-left">
   <strong>
   PRINCIPAL'S SIGNATURE : <span style=" padding-left:150px;border-bottom:2px solid black;width:50px;"></span>
   </strong>
       <img src='stamp.png' class='stamp' alt='stamp' /> 
   </div>
      </div>
<strong>
   PROMOTIONAL STATUS : <span id='pstat' onclick='pst()'><?php
if ($pstatus[0]==''){echo 'Click to edit me' ;}
else{
echo $pstatus[0];
}
?></span><input type="hidden" name="pstatus" id="pstatus" />
   </strong>
<script>
 var pstats=document.getElementById('pstat');
var ptts=document.getElementById('pstatus');
ptts.value=pstats.innerHTML;
 function pst(){
    var x= prompt('Enter promotional status','PROMOTED TO .......');
if (x != null) {
    pstats.innerHTML =x;
    ptts.value =x;
  }
    
}
</script>
     <?php 
     if (!isset($_GET['reg'])){
       ?>
    <button class="btn btn-success p-2 noprint container-fluid m-auto" style="position:fixed;bottom:5em;left:0;"   type="submit">
      SAVE
    </button>
    </form>
   </div>
   </div>
    <button class="btn btn-primary p-2 noprint container-fluid m-5 m-auto" style="position:fixed;bottom:0;left:0;" onclick="printout()">
      PRINT
    </button >
   <script src='emc.js'>
   </script>
   <?php
     }
     else{
       ?>
   <button class="btn btn-primary p-2 noprint container-fluid m-5 m-auto" style="position:fixed;bottom:0;left:0;" onclick="printout()">
     PRINT
     </button>
   <style>
     input{
  pointer-events: none;
     }
   </style>
       <?php
       echo "<script>";
       include 'emc.js';
       echo "</script>";
     }
      ?>
<script src='emc.js?v=4'>
</script>
   <script src="emc2.js?v=1">
   </script>
 </body>
</html>

   
