
<html>
 <title>
 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <head>
 <?php 
   include 'meta.php';
   ?>
   <style>
  </style>
 </head>
 <body>
  <?php 
   include 'menu.php';
   include 'connect.php';
   include 'getsession.php';
?>
   <div id="main">
     <div>
       <?php
   include 'auth.php';
   if($auth==0){
     echo "YOU ARE NOT AUTHORIZED TO PERFORM THIS ACTION";
   }
   else{
     ?>
    <form method="post" action="<?php if($gterm==3){echo 'allrecord3';} else { echo 'allrecord';}?>">
    <select name="class" class="but" style="outline:none;width:80%;padding:20px;"> 
      <option value="JSS1">JSS 1</option>
      <option value="JSS2">JSS 2</option>
      <option value="JSS3">JSS 3</option>
      <option value="SSS1">SSS 1</option>
      <option value="SSS2">SSS 2</option>
      <option value="SSS3">SSS 3</option>
      </select>
  <button type="submit" class="bot">VIEW RESULTS</button>
   </form>
   <?php
   }
   ?>
     </div>
   </div>
   <script src="emc2.js">
   </script>
 </body>
</html>