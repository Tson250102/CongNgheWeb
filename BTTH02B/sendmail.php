<?php
 
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
 
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
 
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
 
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'tson250102@gmail.com';// SMTP username
    $mail->Password = 'wyos drda wbbt idcu'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
 
    //Recipients
    $mail->setFrom('tsonclone@gmail.com ', 'Nguyen Thanh Son');
    $mail->addAddress('dungkt@wru.vn', 'Kieu Tuan Dung'); // Add a recipient
 
    // Content
    $mail->isHTML(true);   // Set email format to HTML
    $mail->Subject = 'DIEM DANH BUOI THUC HANH 02 NGAY 29/09/2023';
    $mail->Body = 'Em ten la Nguyen Thanh Son, MSV 2051063592 xin phep thay diem danh buoi <b>Thuc Hanh 02</b> a';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}