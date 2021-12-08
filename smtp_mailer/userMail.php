<?php

 session_start();


 $email = $_GET['email'];
 $password = $_GET['password'];


?>
<?php
require 'class/SMTPMailer.php';
$mail = new SMTPMailer();

$mail->addTo($email);

$mail->Subject('Thank You For Registration');
$mail->Body('
    
    

<div class=content>
<div class="wrapper-1">
  <div class="wrapper-2">
    <h1>Thank you !</h1>
    <p>Thanks for subscribing to our news letter.  </p>
    <p>you should receive a confirmation email soon  </p>
    <button class="go-home">
    go home
    </button>
  </div>
  <div class="footer-like">
    <p>Email not Activated?
     <a href="#">Click here to Contact Admin</a>
    </p>
  </div>
</div>
</div>


<p>This email contains HTML Tags!</p>
             <table>
                <tr>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                 <tr>
                    <td>'.$email.'</td>
                    <td>'.$password.'</td>
                 </tr>
             </table>
       

    <h3>Mail message</h3> <br>
               

 ');
 echo("<script>window.location = 'adminMailer.php';</script>");

// redirect to home page after registeration
if ($mail->Send()) echo("<script>window.location = '../signin.php';</script>");
else               echo 'Mail failure';


?>

