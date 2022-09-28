
<?php
session_start();

include "insert.php";
/**
 * This example shows making an SMTP connection with authentication.
 */
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$message = $_POST['message'];
//Import the PHPMailer class into the global namespace

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require 'vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'satyam.fgh.76@gmail.com';
//Password to use for SMTP authentication
$mail->Password = "englishe7676";
//Set who the message is to be sent from
$mail->setFrom('satyam.fgh.76@gmail.com', 'Md Jafar');
//Set an alternative reply-to address
$mail->addReplyTo('satyam.fgh.76@gmail.com', 'Md Jafar');
//Set who the message is to be sent to
$mail->addAddress('satyam.fgh.76@gmail.com', 'MD Jafar');
//Set the subject line
$mail->Subject = 'Wedding';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
//$mail->msgHTML(file_get_contents('contents.html'), DIR);
//Replace the plain text body with one created manually

//-------Create Random  function-- Generate Otp------------
$mail->Body="Name: - ".$name. "<br>" ."Email: - ".$email. "<br" ." I WILL ATTEND TO: - ".$number. "<br>" ."message: -".$message."";
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('Machine-Learning.pdf'<table style="width:100%">

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    header('location:index.php');
}
?>