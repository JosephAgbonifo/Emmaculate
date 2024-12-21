function openMenu(){
    var head=document.getElementById("head");
     var main=document.getElementById("main");
      var times=document.getElementById("times");
     var wrap=document.getElementById("wrap");
  head.style.filter="blur(3px)";
   main.style.filter="blur(3px)";
    wrap.style.width="60%";
}
function closeMenu(){
    var head=document.getElementById("head");
     var main=document.getElementById("main");
      var times=document.getElementById("times");
     var wrapper=document.getElementsByClassName("wrapper");
  head.style.filter="blur(0)";
   main.style.filter="blur(0)";
    wrap.style.width="0px";
}