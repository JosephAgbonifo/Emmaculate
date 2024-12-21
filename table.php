<table style="width:90%;" class="table-bordered text-center m-auto">
  <thead>
  <tr>
  <th colspan="2">
  SUBJECT
  </th>
  <th>
  C.A 1 (10)
  </th>
  <th>
  C.A 2 (30)
  </th>
  <th>
  EXAM(60)
  </th>
  <th>
  TOTAL(100)
  </th>
  <th>
  GRADE
  </th>
  <th>
  REMARK
  </th>
  <th>
  POSITION
  </th>
  </tr>
  </thead>
  <tbody>
  <tr>
  <td colspan="2" >
  <input type="text" class="subject" value="<?php echo $subjects[0] ; ?>" name="subject1" readonly />
  </td>
   <td>
  <input value="<?php echo $ca1[0] ; ?>" class="ca1" type="text" name="1ca1" />
  </td>
   <td>
  <input value="<?php echo $ca2[0] ; ?>" class="ca2" type="text" name="2ca1" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[0] ; ?>" type="text" name="exam1" />
  </td>
   <td>
  <input value="<?php echo $t[0] ; ?>" class="total" onkeyup='emac()' type="text" name="total1" readonly />
  </td>
   <td>
  <input class="grade" value="<?php echo $g[0] ; ?>" type="text" name="grade1" readonly />
  </td>
    <td>
  <input class="remark" value="<?php echo $r[0] ; ?>" type="text" name="remark1" readonly />
  </td>
   <td>
  <input class="position" value="<?php echo $p[0] ; ?>" type="text" name="position1" readonly />
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input  type="text" class="subject" value="<?php echo $subjects[1] ; ?>"  name="subject2" readonly/>
  </td>
   <td>
  <input value="<?php echo $ca1[1] ; ?>" class="ca1" type="text" name="1ca2" />
  </td>
   <td>
  <input value="<?php echo $ca2[1] ; ?>"  class="ca2" type="text" name="2ca2" />
  </td>
    <td>
  <input value="<?php echo $e[1] ; ?>" class="exam" type="text" name="exam2" />
  </td>
   <td>
  <input value="<?php echo $t[1] ; ?>" class="total" type="text" name="total2" readonly/>
  </td>
   <td>
  <input class="grade" value="<?php echo $g[1] ; ?>" type="text" name="grade2" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[1] ; ?>" class="remark" type="text" name="remark2" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[1] ; ?>" class="position" type="text" name="position2" readonly/>
  </td>
   </tr>
   <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[2] ; ?>"  name="subject3" readonly />
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[2] ; ?>" type="text" name="1ca3" />
  </td>
   <td>
  <input value="<?php echo $ca2[2] ; ?>" class="ca2" type="text" name="2ca3" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[2] ; ?>" type="text" name="exam3" />
  </td>
   <td>
  <input value="<?php echo $t[2] ; ?>" class="total" type="text" name="total3" readonly/>
  </td>
   <td>
  <input value="<?php echo $g[2] ; ?>" class="grade" type="text" name="grade3" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[2] ; ?>" class="remark" type="text" name="remark3" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[2] ; ?>" class="position" type="text" name="position3" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" name="subject4" value="<?php echo $subjects[3] ; ?>"  readonly/>
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[3] ; ?>" type="text" name="1ca4" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[3] ; ?>" type="text" name="2ca4" />
  </td>
    <td>
  <input value="<?php echo $e[3] ; ?>" class="exam" type="text" name="exam4" />
  </td>
   <td>
  <input value="<?php echo $t[3] ; ?>" class="total" type="text" name="total4" readonly/>
  </td>
   <td>
  <input class="grade" value="<?php echo $g[3] ; ?>" type="text" name="grade4" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[3] ; ?>" class="remark" type="text" name="remark4" readonly/>
  </td>
   <td>
  <input class="position" value="<?php echo $p[3] ; ?>" type="text" name="position4" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2" >
  <input type="text" value="<?php echo $subjects[4] ; ?>"  class="subject" name="subject5" readonly/>
  </td>
   <td>
  <input value="<?php echo $ca1[4] ; ?>" class="ca1" type="text" name="1ca5" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[4] ; ?>" type="text" name="2ca5" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[4] ; ?>" type="text" name="exam5" />
  </td>
   <td>
  <input value="<?php echo $t[4] ; ?>" class="total" type="text" name="total5" readonly/>
  </td>
   <td>
  <input class="grade" value="<?php echo $g[4] ; ?>" type="text" name="grade5" readonly/>
  </td>
    <td>
  <input class="remark" type="text" value="<?php echo $r[4] ; ?>" name="remark5" readonly/>
  </td>
   <td>
  <input class="position" value="<?php echo $p[4] ; ?>" type="text" name="position5" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input  type="text" value="<?php echo $subjects[5] ; ?>"  class="subject" name="subject6" readonly />
  </td>
   <td>
  <input value="<?php echo $ca1[5] ; ?>" class="ca1" type="text" name="1ca6" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[5] ; ?>" type="text" name="2ca6" />
  </td>
    <td>
  <input value="<?php echo $e[5] ; ?>" class="exam" type="text" name="exam6" />
  </td>
   <td>
  <input class="total" type="text" value="<?php echo $t[5] ; ?>" name="total6" readonly />
  </td>
   <td>
  <input value="<?php echo $g[5] ; ?>" class="grade" type="text" name="grade6" readonly />
  </td>
    <td>
  <input value="<?php echo $r[5] ; ?>" class="remark" type="text" name="remark6" readonly />
  </td>
   <td>
  <input class="position" value="<?php echo $p[5] ; ?>" type="text" name="position6" readonly />
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input  type="text" class="subject" value="<?php echo $subjects[6] ; ?>"  name="subject7" readonly/>
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[6] ; ?>" type="text" name="1ca7" />
  </td>
   <td>
  <input value="<?php echo $ca2[6] ; ?>" class="ca2" type="text" name="2ca7" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[6] ; ?>" type="text" name="exam7" />
  </td>
   <td>
  <input value="<?php echo $t[6] ; ?>"  class="total" type="text" name="total7" readonly/>
  </td>
   <td>
  <input class="grade" value="<?php echo $g[6] ; ?>" type="text" name="grade7" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[6] ; ?>" class="remark" type="text" name="remark7" readonly/>
  </td>
   <td>
  <input class="position" value="<?php echo $p[6] ; ?>" type="text" name="position7" readonly/>
  </td>
   </tr>
   <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[7] ; ?>"  name="subject8" readonly />
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[7] ; ?>" type="text" name="1ca8" />
  </td>
   <td>
  <input value="<?php echo $ca2[7] ; ?>"  class="ca2" type="text" name="2ca8" />
  </td>
    <td>
  <input value="<?php echo $e[7] ; ?>" class="exam" type="text" name="exam8" />
  </td>
   <td>
  <input value="<?php echo $t[7] ; ?>" class="total" type="text" name="total8" readonly/>
  </td>
   <td>
  <input value="<?php echo $g[7] ; ?>" class="grade" type="text" name="grade8" readonly/>
  </td>
    <td>
  <input class="remark" value="<?php echo $r[7] ; ?>" type="text" name="remark8" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[7] ; ?>" class="position" type="text" name="position8" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[8] ; ?>"  name="subject9" readonly/>
  </td>
   <td>
  <input value="<?php echo $ca1[8] ; ?>" class="ca1" type="text" name="1ca9" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[8] ; ?>" type="text" name="2ca9" />
  </td>
    <td>
  <input value="<?php echo $e[8] ; ?>" class="exam" type="text" name="exam9" />
  </td>
   <td>
  <input class="total" value="<?php echo $t[8] ; ?>" type="text" name="total9" readonly/>
  </td>
   <td>
  <input value="<?php echo $g[8] ; ?>" class="grade" type="text" name="grade9" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[8] ; ?>" class="remark" type="text" name="remark9" readonly/>
  </td>
   <td>
  <input class="position" value="<?php echo $p[8] ; ?>" type="text" name="position9" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" value="<?php echo $subjects[9] ; ?>"  class="subject" name="subject10" readonly/>
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[9] ; ?>" type="text" name="1ca10" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[9] ; ?>" type="text" name="2ca10" />
  </td>
    <td>
  <input value="<?php echo $e[9] ; ?>" class="exam" type="text" name="exam10" />
  </td>
   <td>
  <input class="total" value="<?php echo $t[9] ; ?>" type="text" name="total10" readonly/>
  </td>
   <td>
  <input value="<?php echo $g[9] ; ?>" class="grade" type="text" name="grade10" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[9] ; ?>" class="remark" type="text" name="remark10" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[9] ; ?>" class="position" type="text" name="position10" readonly/>
  </td>
   </tr>
   <tr>
  <td colspan="2">
  <input type="text" value="<?php echo $subjects[10] ; ?>"  class="subject" name="subject11" readonly />
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[10] ; ?>" type="text" name="1ca11" />
  </td>
   <td>
  <input value="<?php echo $ca2[10] ; ?>" class="ca2" type="text" name="2ca11" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[10] ; ?>" type="text" name="exam11" />
  </td>
   <td>
  <input value="<?php echo $t[10] ; ?>" class="total" type="text" name="total11" readonly />
  </td>
   <td>
  <input class="grade" value="<?php echo $g[10] ; ?>" type="text" name="grade11" readonly />
  </td>
    <td>
  <input value="<?php echo $r[10] ; ?>" class="remark" type="text" name="remark11" readonly />
  </td>
   <td>
  <input value="<?php echo $p[10] ; ?>" class="position" type="text" name="position11" readonly />
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[11] ; ?>"  name="subject12" readonly/>
  </td>
   <td>
  <input value="<?php echo $ca1[11] ; ?>"   class="ca1" type="text" name="1ca12" />
  </td>
   <td>
  <input class="ca2"  value="<?php echo $ca2[11] ; ?>"  type="text" name="2ca12" />
  </td>
    <td>
  <input value="<?php echo $e[11] ; ?>"  class="exam" type="text" name="exam12" />
  </td>
   <td>
  <input class="total"  value="<?php echo $t[11] ; ?>" type="text" name="total12" readonly/>
  </td>
   <td>
  <input  value="<?php echo $g[11] ; ?>" class="grade" type="text" name="grade12" readonly/>
  </td>
    <td>
  <input  value="<?php echo $r[11] ; ?>" class="remark" type="text" name="remark12" readonly/>
  </td>
   <td>
  <input  value="<?php echo $p[11] ; ?>" class="position" type="text" name="position12" readonly/>
  </td>
   </tr>
   <tr>
  <td colspan="2">
  <input type="text" value="<?php echo $subjects[12] ; ?>"  class="subject" name="subject13" readonly />
  </td>
   <td>
  <input  value="<?php echo $ca1[12] ; ?>" class="ca1" type="text" name="1ca13" />
  </td>
   <td>
  <input  value="<?php echo $ca2[12] ; ?>"  class="ca2" type="text" name="2ca13" />
  </td>
    <td>
  <input   value="<?php echo $e[12] ; ?>" class="exam" type="text" name="exam13" />
  </td>
   <td>
  <input   value="<?php echo $t[12] ; ?>"  class="total" type="text" name="total13" readonly/>
  </td>
   <td>
  <input   value="<?php echo $g[12] ; ?>" class="grade" type="text" name="grade13" readonly/>
  </td>
    <td>
  <input class="remark"   value="<?php echo $r[12] ; ?>"  type="text" name="remark13" readonly/>
  </td>
   <td>
  <input   value="<?php echo $p[12] ; ?>"  class="position" type="text" name="position13" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[13] ; ?>"  name="subject14" readonly/>
  </td>
   <td>
  <input class="ca1"   value="<?php echo $ca1[13] ; ?>"  type="text" name="1ca14" />
  </td>
   <td>
  <input   value="<?php echo $ca2[13] ; ?>"  class="ca2" type="text" name="2ca14" />
  </td>
    <td>
  <input class="exam"  value="<?php echo $e[13] ; ?>"  type="text" name="exam14" />
  </td>
   <td>
  <input  value="<?php echo $t[13] ; ?>"  class="total" type="text" name="total14" readonly/>
  </td>
   <td>
  <input class="grade"  value="<?php echo $g[13] ; ?>"  type="text" name="grade14" readonly/>
  </td>
    <td>
  <input class="remark"  value="<?php echo $r[13] ; ?>" type="text" name="remark14" readonly/>
  </td>
   <td>
  <input  value="<?php echo $p[13] ; ?>"  class="position" type="text" name="position14" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[14] ; ?>"  name="subject15" readonly/>
  </td>
   <td>
  <input class="ca1"  value="<?php echo $ca1[14] ; ?>" type="text" name="1ca15" />
  </td>
   <td>
  <input value="<?php echo $ca2[14] ; ?>"  class="ca2" type="text" name="2ca15" />
  </td>
    <td>
  <input value="<?php echo $e[14] ; ?>"  class="exam" type="text" name="exam15" />
  </td>
   <td>
  <input value="<?php echo $t[14] ; ?>" class="total" type="text" name="total15" readonly/>
  </td>
   <td>
  <input class="grade" value="<?php echo $g[14] ; ?>" type="text" name="grade15" readonly/>
  </td>
    <td>
  <input value="<?php echo $r[14] ; ?>" class="remark" type="text" name="remark15" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[14] ; ?>" class="position" type="text" name="position15" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" value="<?php echo $subjects[15] ; ?>"  class="subject" name="subject16" readonly />
  </td>
   <td>
  <input class="ca1" value="<?php echo $ca1[15] ; ?>" type="text" name="1ca16" />
  </td>
   <td>
  <input value="<?php echo $ca2[15] ; ?>" class="ca2" type="text" name="2ca16" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[15] ; ?>" type="text" name="exam16" />
  </td>
   <td>
  <input  value="<?php echo $t[15] ; ?>" class="total" type="text" name="total16" readonly />
  </td>
   <td>
  <input  value="<?php echo $g[15] ; ?>" class="grade" type="text" name="grade16" readonly />
  </td>
    <td>
  <input class="remark"  value="<?php echo $r[15] ; ?>" type="text" name="remark16" readonly />
  </td>
   <td>
  <input  value="<?php echo $p[15] ; ?>" class="position" type="text" name="position16" readonly />
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[16] ; ?>"  name="subject17" readonly/>
  </td>
   <td>
  <input class="ca1"  value="<?php echo $ca1[16] ; ?>" type="text" name="1ca17" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[16] ; ?>"  type="text" name="2ca17" />
  </td>
    <td>
  <input class="exam"  value="<?php echo $e[16] ; ?>" type="text" name="exam17" />
  </td>
   <td>
  <input value="<?php echo $t[16] ; ?>"  class="total" type="text" name="total17" readonly/>
  </td>
   <td>
  <input class="grade"  value="<?php echo $g[16] ; ?>"  type="text" name="grade17" readonly/>
  </td>
    <td>
  <input  value="<?php echo $r[16] ; ?>" class="remark" type="text" name="remark17" readonly/>
  </td>
   <td>
  <input  value="<?php echo $p[16] ; ?>"  class="position" type="text" name="position17" readonly/>
  </td>
   </tr>
   <tr>
  <td colspan="2">
  <input type="text" class="subject" value="<?php echo $subjects[17] ; ?>"  name="subject18" readonly />
  </td>
   <td>
  <input class="ca1"  value="<?php echo $ca1[17] ; ?>" type="text" name="1ca18" />
  </td>
   <td>
  <input  value="<?php echo $ca2[17] ; ?>" class="ca2" type="text" name="2ca18" />
  </td>
    <td>
  <input  value="<?php echo $e[17] ; ?>"  class="exam" type="text" name="exam18" />
  </td>
   <td>
  <input  value="<?php echo $t[17] ; ?>"  class="total" type="text" name="total18" readonly/>
  </td>
   <td>
  <input  value="<?php echo $g[17] ; ?>"   class="grade" type="text" name="grade18" readonly/>
  </td>
    <td>
  <input  value="<?php echo $r[17] ; ?>" class="remark" type="text" name="remark18" readonly/>
  </td>
   <td>
  <input  value="<?php echo $p[17] ; ?>"  class="position" type="text" name="position18" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" name="subject19" value="<?php echo $subjects[18] ; ?>" readonly/>
  </td>
   <td>
  <input class="ca1"  value="<?php echo $ca1[18] ; ?>" type="text" name="1ca19" />
  </td>
   <td>
  <input  value="<?php echo $ca2[18] ; ?>"   class="ca2" type="text" name="2ca19" />
  </td>
    <td>
  <input  value="<?php echo $e[18] ; ?>"  class="exam" type="text" name="exam19" />
  </td>
   <td>
  <input value="<?php echo $t[18] ; ?>"  class="total" type="text" name="total19" readonly/>
  </td>
   <td>
  <input value="<?php echo $g[18] ; ?>"  class="grade" type="text" name="grade19" readonly/>
  </td>
    <td>
  <input class="remark"value="<?php echo $r[18] ; ?>"   type="text" name="remark19" readonly/>
  </td>
   <td>
  <input value="<?php echo $p[18] ; ?>"  class="position" type="text" name="position19" readonly/>
  </td>
   </tr>
    <tr>
  <td colspan="2">
  <input type="text" class="subject" name="subject20" value="<?php echo $subjects[19] ; ?>" readonly/>
  </td>
   <td>
  <input value="<?php echo $ca1[19] ; ?>"   class="ca1" type="text" name="1ca20" />
  </td>
   <td>
  <input class="ca2" value="<?php echo $ca2[19] ; ?>"   type="text" name="2ca20" />
  </td>
    <td>
  <input class="exam" value="<?php echo $e[19] ; ?>"   type="text" name="exam20" />
  </td>
   <td>
  <input value="<?php echo $t[19] ; ?>"  class="total" type="text" name="total20" readonly/>
  </td>
   <td>
  <input class="grade"  value="<?php echo $g[19] ; ?>"  type="text" name="grade20" readonly/>
  </td>
    <td>
  <input  value="<?php echo $r[19] ; ?>" class="remark" type="text" name="remark20" readonly/>
  </td>
   <td>
  <input  value="<?php echo $p[19] ; ?>" class="position" type="text" name="position20" readonly/>
  </td>
   </tr>
   
  </tbody>
</table>
<script>
  var inp= document.getElementsByTagName("input");
for(x=0;x<inp.length;x++){
 addEventListener("keyup", emac);
 }
 function emac()  
 {
   var cla=document.getElementById('class').innerHTML;
 var ca1=document.getElementsByClassName("ca1");
 var ca2=document.getElementsByClassName("ca2");
var exam=document.getElementsByClassName("exam");
var total=document.getElementsByClassName("total");
var grade=document.getElementsByClassName("grade");
var remark=document.getElementsByClassName("remark");
   var ob=[];
   var obtain=0;
   for(i=0;i<exam.length;i++){
   var tot=parseInt(ca1[i].value)+parseInt(ca2[i].value)+parseInt(exam[i].value);
   if(isNaN(tot)){      
   }
   else{
     if(cla=="JSS1" || cla=="JSS2" ||cla=="JSS3")
     {
       if(tot<40){
         var gra="F";
         var rem="POOR";}
     else if(tot<45){
       var gra="E";
       var rem="FAIR";
     }
     else if(tot<50){
       var gra="D";
       var rem="FAIRLY GOOD";}
     else if(tot<59){
       var gra="C";
       var rem="GOOD";}
     else if(tot<70){
       var gra ="B";
       var rem="VERY GOOD";
     }
     else {
       var gra="A";
       var rem="EXCELLENT";
     }
     }
     else{
       if (tot<40){
         var gra="F9";
         var rem="FAIL";
         }
       else if(tot<45){
         var gra="E8";
         var rem="PASS";
         }
       else if(tot<50){
         var gra="D7";
         var rem="FAIR";
       }
       else if(tot<55){
         var gra="C6";
         var rem="CREDIT";
       }
       else if(tot<60){
         var gra="C5";
         var rem="CREDIT";
       }
       else if(tot<65){
         var gra="C4";
         var rem="CREDIT";
       }
       else if(tot<70){
         var gra="B3";
         var rem="GOOD";}
       else if(tot<75){
         var gra="B2";
         var rem="VERY GOOD";
       }
       else{
         var gra="A1";
         var rem="EXCELLENT";
       };
     }
   total[i].value=tot;
   grade[i].value=gra;
     remark[i].value=rem;
 };
};
   
 }
</script>