<div style="width:80%;text-align:left" class="m-auto text-left">
  <?php
if ($ac=="close" or isset($_GET['reg'])){
  ?>
  <strong>CLASS TEACHER'S COMMENT : </strong><span><?php echo $tc[0]; ?></span>
  <br />
  <strong>PRINCIPAL'S COMMENT : </strong><span><?php echo $pc[0]; ?></span>
  <br />
  
  
  <?php
}
  else {
    ?>
  <strong >CLASS TEACHER'S COMMENT : </strong><span id="tco" onclick="tco()"><?php echo $tcc;?>
 </span><input type="hidden" name="teach" id="te" />
  <br />
  <input type="hidden"  name="prin" id="pe"/ >
  <strong>PRINCIPAL'S COMMENT : </strong> <span id="pco" onclick="pco()"><?php echo $pcc;?>
  </span>
  <br />
</div>
 <div id="tc" class="noprint">
 <h3>TEACHER'S COMMENT</h3>
   <h1 onclick="cl()">&times;</h1>
<p onclick="com(0)" class="tc">
<span class="per"></span>
has a positive attitude towards school.</p>
<p onclick="com(1)" class="tc"><span class="per"></span> is respectful and considerate.</p>
<p  onclick="com(2)" class="tc"><span class="per"></span>makes a sincere effort and works hard in class.</p>
<p  onclick="com(3)" class="tc"><span class="per"></span>displays an enthusiasm for learning.</p>
<p  onclick="com(4)" class="tc"><span class="per"></span> is a leader and a positive role model for other students.</p>
<p  onclick="com(5)"  class="tc"><span class="per"></span>demonstrates positive character traits.</p>
<p onclick="com(6)"  class="tc"><span class="per"></span> does well when <span class="per"></span> focuses on the task at-hand.</p>
<p  onclick="com(7)" class="tc"><span class="per"></span> has difficulty completing class assignments in a timely manner.</p>
<p  onclick="com(8)" class="tc"><span class="per"></span> requests a great deal of adult assistance when completing school work.</p>
<p  onclick="com(9)" class="tc"><span class="per"></span> needs to work on sitting still and focusing on class lessons.</p>
<p  onclick="com(10)" class="tc"><span class="per"></span> needs to work on organizing school supplies.</p>
<p  onclick="com(11)" class="tc"><span class="per"></span>needs to treat others with respect.</p>
<p  onclick="com(12)" class="tc">I'm glad <span class="per"></span> is eager to participate in class discussions, but <span class="per"></span> needs to raise <span class="pos"></span> hand when <span class="per"></span> has something to say.</p>
<p onclick="com(13)"  class="tc"><span class="per"></span> often forgets <span class="pos"></span> books and assignments.</p>
<p  onclick="com(14)" class="tc"><span class="per"></span> frequently comes to class unprepared.</p>
<p  onclick="com(15)" class="tc"><span class="per"></span> needs to complete homework assignments on-time.</p>
<p onclick="com(16)"  class="tc"><span class="per"></span>has difficulty concentrating.</p>
<p onclick="com(17)"  class="tc"><span class="per"></span> does well when <span class="per"></span> slows down and checks <span class="pos"></span> work carefully.</p>
<p  onclick="com(18)" class="tc">When motivated, <span class="per"></span> does well on class assignments.</p>
<p  onclick="com(19)" class="tc"><span class="pos"></span> listening skills need improvement.</p>
<p  onclick="com(20)" class="tc"><span class="per"></span> needs to keep <span class="pos"></span> hands to <span class="self"></span>.</p>
<p  onclick="com(21)" class="tc"><span class="per"></span> needs to follow school rules in lunch and special areas.</p>
<p onclick="com(22)"  class="tc">I would like to see <span class="pos"></span> socialize with other students throughout the school day.</p>
<p onclick="com(23)"  class="tc"><span class="per"></span> needs frequent reminders to stay focused throughout the school day.</p>
<p onclick="com(24)"  class="tc"><span class="per"></span>has missed <span class="pos"></span> school days this year. Frequent absences are affecting <span class="is"></span> school work.</p>
<p onclick="com(25)"  class="tc"><span class="per"></span>does not attempt to make up missing or late work.</p>
<p onclick="com(26)"  class="tc">I would like to see<span class="pos"></span> become a more active participant in class discussions.</p>
<p onclick="com(27)"  class="tc"><span class="per"></span>needs to follow teacher directions without complaining.</p>
<p onclick="com(28)"  class="tc"><span class="per"></span>is becoming more independent when completing class assignments.</p>
<p  onclick="com(29)" class="tc"><span class="per"></span> needs to work on following written and oral directions.</p>
 <p  onclick="com(30)"  class="tc">
 <span class="pos"></span>
 in-class behavior is excellent.
 </p>
</div>


<div id="pc" class="noprint">
 <h3>PRINCIPAL'S COMMENT</h3>
  <h1 onclick="cl()">&times;</h1>
<p onclick="pcom(0)" class="pc">Good result, needs improvement though</p>
<p onclick="pcom(1)" class="pc">Very Good result, Keep it up.</p>
<p  onclick="pcom(2)" class="pc">Fairly good performance there is always room for improvement. </p>
<p  onclick="pcom(3)" class="pc">Excellent performance, the sky is your starting point </p>
<p  onclick="pcom(4)" class="pc">An exemplary result, keep soaring dear. </p>
<p  onclick="pcom(5)"  class="pc">A great improvement, keep it up.</p>
<p onclick="pcom(6)"  class="pc"> outstanding performance pls keep it up.</p> 
<p  onclick="pcom(7)" class="pc">Perfect but you can always be better.</p>
<p  onclick="pcom(8)" class="pc">I can't be prouder, pls keep it up.</p>
<?php
  }
  ?>
</div>
