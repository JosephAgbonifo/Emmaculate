<html>
  <head>
    <?php
include 'meta.php';
    ?>
  </head>
  <body>
    <div id="head">
 <img src="emc.png" width="50px" alt="logo">
<h3>DE EMMACULATE COLLEGE</h3>
<i onclick="openMenu()" style="font-size:2em;" class="fa fa-bars" aria-hidden="true"></i>
 </div>
 <div id="wrap">
 <i onclick="closeMenu()" id="times"  style="font-size:2em;" class="fa fa-times" aria-hidden="true"></i>
 <div>
	<a href="staff/login">
	STAFF LOGIN
</a>
	<a href="checkresult">
	CHECK RESULT
</a>
	<a href="#">
	CONTACT US
</a>
</div>
</div>

    <div id="main">
      <div>
        :
        <?php
        if($_SERVER['REQUEST_METHOD']=='POST'){
          $num=strtoupper($_POST['reg']);
      
          $code=$_POST['code'];
          $cd=[];
          include 'connect.php';
          
          include 'getsession.php';
          $numm= $num.'/'.$gsess.'/'.$gterm;
          $sql = "SELECT pin FROM students WHERE reg_number='$num'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    array_push($cd,$row['pin']);
  }
  if ($code==$cd[0]){
if($gterm=='3'){
    header('Location : record3.php?reg='.$num.'&access='.$code);
    exit();
}
else{
    header('Location :record.php?reg='.$num.'&access='.$code);
exit();
}
  }
  else{
    echo 'WRONG CODE, CHECK IT AND CORRECT IT';
  }
   
} else {
  echo "REG NUMBER DOES NOT EXIST, PLS CORRECT THE REG NUMBER";
}
        }; 
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ; ?>" method="post">
<input class="bot" name="reg" type="text" placeholder="EMC/XX/XXXX">
<input class="but" name="code" type="password" pattern="[0-9]*"  inputmode="numeric" placeholder="XXXXXXXXXX">
<button type="submit" style="padding:0;height:40px;width:90px;" class="bot">
CHECK RESULTS
</button>
        </form>
      </div>
    </div>
  </body>
  <script src="emc2.js">
  </script>
</html>
