<?php  
 
require('PHPMailer/PHPMailerAutoload.php');  // path to the PHPMailer class
 
$mail = new PHPMailer();  
 
$mail->IsSMTP();  // telling the class to use SMTP
$mail->Mailer = "smtp";
$mail->CharSet = "UTF-8";
$mail->Host = "mx1.hostinger.in.th";
$mail->Port = 110;
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->Username = "chicken_admin@chickenthreetime.zz.mu"; // SMTP username
$mail->Password = "qq12ww"; // SMTP password 
 
$mail->From     = "Samfa Craftsman";
$mail->FromName = 'Samfa Craftsman';
$mail->AddAddress($email);
$mail->isHTML(true);  
$mail->Subject  = 'Thank you for your order No.'.$order_no ;
$mail->Body     = 'Thank you for your order No.$order_no <br> We will contact you in 24 hour' ;

$mail->WordWrap = 50;  
 
if(!$mail->Send()) {
echo 'Message was not sent.';
echo 'Mailer error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent.';
}
?>