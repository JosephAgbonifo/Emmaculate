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
 
 </head>
  <?php
  if($_SERVER['REQUEST_METHOD']=="POST"){
   include 'connect.php';
    include 'getsession.php';
    $ac='close';
  $cl=$_POST['class'];
    $sqle = "SELECT reg_number, fullname FROM students WHERE class='$cl'";
$resul = mysqli_query($conn, $sqle);

if (mysqli_num_rows($resul) > 0) {
  // output data of each row
  while($ro = mysqli_fetch_assoc($resul)) {
      
    $student=$ro["reg_number"];
    $studentes=$ro["reg_number"].'/'.$gsess.'/'.$gterm;
    setcookie('reg', $student, time() + (86400 * 1), "/");
    for($i=1;$i<21;$i++){
    };
     $name=[];
     $class=[];
    $sex=[];
    $img=[];
$pc=[];
    $tc=[];
 $pstatus=[];
     $sqll="SELECT fullname, class,sex,img,pc,tc FROM students WHERE reg_number='$student'";
     $res=mysqli_query($conn, $sqll);
     if(mysqli_num_rows($res) > 0)
     {
     while( $rest=mysqli_fetch_assoc($res)){
       $namea=array_push($name,$rest["fullname"]);
       $classa=array_push($class,$rest["class"]);
       array_push($sex,$rest["sex"]);
       array_push($img,$rest["img"]);
       array_push($tc,$rest["tc"]);
       array_push($pc,$rest["pc"]);
     }
                        
                          

     }
    
      $sql = "SELECT subject, ca1, ca2, exam, total, grade, remark, position  FROM `$studentes`";
$result = mysqli_query($conn, $sql);
    $subjects=[];
    $ca1=array();
    $ca2=array();
    $e=array();
    $g=array();
    $r=array();
    $p=array();
  $t=array();
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push($subjects,$row["subject"]);
    array_push($ca1,$row["ca1"]);
    array_push($ca2,$row["ca2"]);
    array_push($e,$row["exam"]);
    array_push($t,$row['total']);
    array_push($g,$row["grade"]);
    array_push($r,$row["remark"]);
    array_push($p,$row["position"]);
  }
} else {
  echo "<div class='alert alert-danger'>
  NO STUDENT HAS BEEN REGISTERED YET
</div>";
}
    $n=array();
    $obtained=array_sum($t);
    for($i=0;$i<count($t);$i++){
      if($t[$i]!=0){
      array_push($n,$t[$i]);
      }
      else {
     
      };
      
    };
    $obtainable=count($n) * 100;
    $per=round(($obtained/$obtainable)*100);
 echo '   
 <body>
 <div id="sheet" class="m-auto">
  <div class="row">
   <div class="col-3">
   <img width="100%" class="float-start"src="emc.png">
   </div>
      <div id="em" class="col-6 text-center pt-2">
    <strong><h2>
    DE-EMMACULATE COLLEGE
   </h2>
   </strong>
   <p style="font-size:10px;">
  <i class="fa fa-map-marker" aria-hidden="true"></i> 2, ibikunle street Wasimi by Underbridge, opposite Power line, Mile 12, Lagos, Nigeria 
   <br />
 <i class="fa-solid fa-phone"></i> 07064369964, 08138051390
  <br />
 <i class="fa-solid fa-envelope"></i> emmaculatecollege19@gmail.com
   </p>
     <strong><h5 class="mt-2 text-warning">FIRST TERM EXAMINATION RESULT </h5></strong>
   </div>
      <div class="col-3">
   <img width="150px" height="150px"  class="float-end" src="'. $img[0]. '">
  </div>
  <div style="width:70%" class=" m-auto pb-1 text-center">
  <h5><strong>NAME : </strong>'. $name[0].' </h5>
  <h5 class=""><strong>CLASS : </strong>'. $class[0]. ' </h5>
  <div class="row container">
  <div class="col">
  <h5><strong>REG-NUM : </strong>'. $student. '</h5>
  </div>
  <div class="col">
  <h5><strong>SEX :</strong><span id="sex">'.$sex[0] .'</span></h6>
  </div>
  </div>
  <div class="row container-fluid">
      <div class="col">
    <h6 ><strong>SESSION : </strong>'. $gsess .'        </h6>
      </div>
      <div class="col">
        <h6><strong>TERM : </strong>'. $gter .'</h6>
      </div>
    </div>
   <h6>NEXT TERM BEGINS : 25<sup>th</sup> April 2023 </h6>
    </div>
    <form action="fetchreport.php" method="post">';
    include "table.php";
    echo'
     <div style="width:80%" class="row m-auto mt-3 text-center">
  <div class="col-6">';
   
    include "marks.php";
  echo '
  </div>
   <div class="col-6">
  ';
     include "keytograde.php";
     echo '
  </div>
  </div>';
    echo '
<div style="width:80%;text-align:left" class="m-auto text-left">
<strong>CLASS TEACHER&#39;S COMMENT : </strong><span>';
 echo $tc[0];  
echo '</span>
  <br />
  <strong>PRINCIPAL&#39;S COMMENT : </strong><span>';
 echo $pc[0]; 
echo '</span>
  <br />
</div>
   <div style="width:80%;" class="container-fluid m-auto mt-1 row">
   <div class="col text-left">
   <strong>
   DATE : <span style="padding-left:0px;padding-right:0px;border-bottom:2px solid black;width:50px;">'. date("l jS \of F Y") . '</span>
   </strong>
   </div>
      <div class="col text-left">
   <strong>
   PRINCIPAL&#39;S SIGNATURE : <span style=" padding-left:150px;border-bottom:2px solid black;width:50px;"></span>
   </strong>
   <img src="stamp.png" class="stamp" style="margin-left:50px;" alt="stamp" /> 
   </div>
    </div>
<strong>
   PROMOTINAL STATUS : <span>' ;
if ($pstatus[0]==''){echo "Click to edit me" ;}
else{
echo $pstatus[0];
};
echo '</span>
    <button style="display:none;" class="btn btn-success p-2 noprint container m-5" type="submit">
      SAVE
    </button>
    </form>
    </div>
    </div>
    ';
 }
} else {
  echo "<div style='margin-top:5em;' class='alert alert-danger'>
  NO STUDENT HAS BEEN REGISTERED YET
</div>";
};}
  ?>
    <button class="btn btn-primary p-2 noprint container-fluid mb-5 pt-5 pb-5" onclick="printout()">
      PRINT
    </button>
    <script src="emc.js?v=4">
    </script>
     <script>
   var  in=document.getElementsByTagName('input');
     for(i=0;i<in.length;i++){
       in[i].disabled=true;
     };
  </script>
  <style>
    input{
  pointer-events: none;
    }
  </style>
 </body>
 <script>

</html>

