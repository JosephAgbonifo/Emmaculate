function day(){var dat=document.getElementById('dateb').value;
var d= new Date(day);
               const weekday = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
 const month = ["January","February","March","April","May","June","July","August","September","October","November","December"];

               var one = weekday[d.getDay()];
               let year = d.getFullYear();
               let wd = d.getDate();
               let name = month[d.getMonth()];
               dat= one+", "wd+" of "+name+", "+year;
}
function printout() {
     var a = document.getElementById("sheet");
     window.print();
   }
var inp= document.getElementsByTagName("input");
for(x=0;x<inp.length;x++){
 addEventListener("keyup", calcu);
 }
 function calcu()  
 {
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
         var rem="FAIL";}
     else if(tot<45){
       var gra="E";
       var rem="FAIR";
     }
     else if(tot<55){
       var gra="D";
       var rem="FAIRLY GOOD";}
     else if(tot<65){
       var gra="C";
       var rem="GOOD";}
     else if(tot<75){
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