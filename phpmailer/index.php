<?php
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$message = $_POST['message'];

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'mohamedaminechaabane9@gmail.com';                     // SMTP username
    $mail->Password   = 'f644725amine';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email , $name);
    $mail->addAddress('mohamedaminechaabane9@gmail.com', 'Support');    
    $mail->addReplyTo($email , $name);


    // Attachments
   // $mail->addAttachment('');         // Add attachments


    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'New Entry: Contact Us';
    $mail->Body    = $message;
    $mail->AltBody = $message;

    $mail->send();
    $_SESSION['success'] = "Thank you, your message has been sent !";
    header ('location: ../index.php');

} catch (Exception $e) {

$_SESSION['status'] = "Your message has not been sent. Mailer Error: {$mail->ErrorInfo} ";
header ('location: ../contact.php');
}