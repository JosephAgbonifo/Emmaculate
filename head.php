<div id="head"  class=" shadow text-left topnav">
    <strong>
    DE-EMMACULATE COLLEGE  
   </strong>
   <br />
   <em>...be the best you can be...</em>
  <div id="myLinks">
    <?php
if(!isset($_COOKIE["email"])) {
header("Location: https://www.emmaculatecollege.com.ng/staff/login");
exit();
} else {
?>
    <a href="https://emmaculatecollege.com.ng/staff/dash">Dash Board</a>
    <a href="https://emmaculatecollege.com.ng/fetchrecord">Edit report</a>
    <a href="https://emmaculatecollege.com.ng/signout">Sign our</a>
    <?php
;}
?>
  </div>
  <a href="javascript:void(0);" class="icon" id="icon" onclick="menu()">
    MENU
  </a>
</div>
<script>
  function menu() {
    var icon=document.getElementById("icon");
  var x = document.getElementById("myLinks");
  if (x.style.height === "250px") {
    x.style.height = "0";
    icon.style.backgroundColor="var(--col1)";
    
  } else {
    x.style.height = "250px";
    icon.style.backgroundColor="azure";
  }
  }
</script>
