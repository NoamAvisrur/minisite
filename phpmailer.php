<?php

require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();        
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Username = 'noamavisrur@gmail.com';              
$mail->Password = 'password';                      
$mail->SMTPSecure = 'tls';                     
$mail->Port = 587;               

$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('noamavisrur@gmail.com', 'Joe User');   
$mail->addAddress('ellen@example.com');             
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz');        
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');   
$mail->isHTML(true);                               

$mail->Subject = 'new potential adopter';
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
} else {
    echo 'Message has been sent';
}