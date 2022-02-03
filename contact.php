<?php
if($page2){
$showthanks = 1;  
}

$to      = 'xmetrix@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: webmaster@example.com' . "\r\n" .
    'Reply-To: webmaster@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
if( historyPatternMatches() === 1){
  $chance = true;
  clearHistory();
}
$gs = '';
if($chance){
  $gs = '?grayscale';
}
?>


<div id="contactform">
  <div id="flex col aic">
    <img src="//picsum.photos/300/300<?php echo $gs;?>" alt="">
    <div class="flex col m20">
      <?php 
      $x = getSocials();
      //  var_dump($x);
      foreach($x as $key => $value){
        echo '<span class="flex socials">';
        echo '<p class="fg">'.$value->name.'</p>';
        echo '<p class="socialvals">'.$value->val.'</p>';
        echo '</span>';
      }
      ?>


    </div>
    <?php
    if($showthanks){
      ?>
      <p>Thanks! your message is on its way!</p>
      <?php  }else{ ?>
    
    <p>Send a quick message to me</p>
    <form action="?post" method="POST">
    <textarea cols=20 rows=2 name="msg"></textarea>
    <button>Send</button>
    </form>
    <?php } ?>
  </div>

</div>
 