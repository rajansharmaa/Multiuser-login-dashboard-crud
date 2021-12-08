
<?php
require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo('rajansharmaa46@gmail.com');

$mail->Subject('New User Just Registered');
$mail->Body('
    
    

<div class=content>
<div class="wrapper-1">
  <div class="wrapper-2">
    <h1>New User REgistered !</h1>
    <p>Thanks for subscribing to our news letter.  </p>
    <p>you should receive a confirmation email soon  </p>
    <button class="go-home">
    go home
    </button>
  </div>
  
</div>


<p>This email contains HTML Tags!</p>

       

    <h3>Mail message</h3> <br>
               

 ');
// redirect to home page after registeration
echo "<script>alert('Wow! User Registration Completed.')</script>";
if ($mail->Send()) echo("<script>window.location = '../signin.php';</script>");
else               echo 'Mail failure';


?>

