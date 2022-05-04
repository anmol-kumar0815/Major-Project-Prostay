<?php
$to = "anmolshrivastav.08@gmail.com";
$subject = "checking";
$message = "your reset password opt is 59842";
$from = "prostay@farmsbook.com";
$headers = "From:".$from;

if(mail($to,$subject,$message,$headers)) {
    echo 'mail is sent';
}

?>