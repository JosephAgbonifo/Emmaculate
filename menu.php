 <div id="head">
 <img src="https://www.emmaculatecollege.com.ng/emc.png" width="50px" alt="logo">
<h3>DE EMMACULATE COLLEGE</h3>
<i onclick="openMenu()" style="font-size:2em;" class="fa fa-bars" aria-hidden="true"></i>
 </div>
 <div id="wrap">
 <i onclick="closeMenu()" id="times"  style="font-size:2em;" class="fa fa-times" aria-hidden="true"></i>
 <div>
   <?php 
   if (!isset($_COOKIE['email'])){
     ?>
	<a href="/staff/login">
	STAFF LOGIN
</a>
	<a href="/checkresult">
	CHECK RESULT
</a>
	<a href="#">
	CONTACT US
</a>
   <?php
   ;}
   else{
     ?>
   <a href="/staff/dash">
     DASHBOARD
   </a>
   <a href="/fetchreport">
     EDIT REPORT
   </a>
   <a href="/signout">
     SIGN OUT
   </a>
   <?php
;}
   ?>
</div>
</div>
