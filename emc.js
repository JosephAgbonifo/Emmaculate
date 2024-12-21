function cl(){     document.getElementById("tc").style.width="0%";
document.getElementById("pc").style.width="0%";
             }
var tttt = document.getElementById("tco"); 
var pppp = document.getElementById("pco"); 
document.getElementById("te").value=tttt.innerHTML;
document.getElementById("pe").value=pppp.innerHTML;

var sex=document.getElementById("sex").innerHTML;
 var par = document.getElementsByClassName('per');
  var pos = document.getElementsByClassName('pos');
  var is = document.getElementsByClassName('is');
  var m = document.getElementsByClassName('m');
var m = document.getElementsByClassName('self');
if( sex=="Male"){
 for(let i=0;i<par.length;i++){
     par[i].innerHTML=" He ";
 }
  for(let i=0;i<pos.length;i++){
     pos[i].innerHTML=" His ";
 }
 for(let i=0;i<is.length;i++){
     is[i].innerHTML=" he's ";
 }
 for(let i=0;i<m.length;i++){
     is[i].innerHTML=" him ";
 }
 for(let i=0;i<self.length;i++){
     self[i].innerHTML=" Himself ";
 }
}
else{
 for(let i=0;i<par.length;i++){
     par[i].innerHTML=" She ";
 }
  for(let i=0;i<pos.length;i++){
     pos[i].innerHTML=" Her ";
 }
 for(let i=0;i<is.length;i++){
     is[i].innerHTML=" She's ";
 }
 for(let i=0;i<m.length;i++){
     pos[i].innerHTML=" Her ";
 }
 for(let i=0;i<self.length;i++){
     pos[i].innerHTML=" Herself ";
 }
}
function tco(){ document.getElementById("tc").style.width="90%";
document.getElementById("pc").style.width="0%";
}
function pco(){ document.getElementById("pc").style.width="90%";
document.getElementById("tc").style.width="0%";
}
function com(i){
   var co = document.getElementsByClassName("tc"); 
  document.getElementById("te").value=co[i].innerHTML;
  document.getElementById("tco").innerHTML=co[i].innerHTML;
document.getElementById("tc").style.width="0%";
}
function pcom(i){
   var co = document.getElementsByClassName("pc"); 
  document.getElementById("pe").value=co[i].innerHTML;
  document.getElementById("pco").innerHTML=co[i].innerHTML;
document.getElementById("pc").style.width="0%";
}
   
function printout() {
     var a = document.getElementById("sheet");
     window.print();
   }
var inp= document.getElementsByTagName("input");
for(x=0;x<inp.length;x++){
 addEventListener("keyup", emac);
 }

document.addEventListener('DOMContentLoaded', function() {
  document.querySelector('input').addEventListener('keyup', function() {
 function emac()  
 {
   document.write('hshs');
   var cla=document.getElementById("class").innerHTML;
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
});
});
