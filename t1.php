<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['submit']))
{
    $name =$_POST['name'];
    $email=$_POST['email']; 
    $message=$_POST['message'];



//Load Composer's autoloader
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
                          //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'mominaadil1333@gmail.com';                     //SMTP username
    $mail->Password   = 'gkvn uzxb zvgt muhm';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('mominaadil1333@gmail.com', 'contectform');
    $mail->addAddress('codbro1333@gmail.com', 'Joe User');     //Add a recipient
    
  
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'tasting';
    $mail->Body    = "sender name- $name <br> sender email- $email<br> massage - $message" ;
   

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}
?>