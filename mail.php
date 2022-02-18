<?php
// Load Session Messaginger Class
require_once 'includes/SessionMessage.php';

// Setup PHP Mailer
use Google\Site_Kit_Dependencies\GuzzleHttp\Psr7\Message;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/PHPMailer/src/Exception.php';
require 'includes/PHPMailer/src/PHPMailer.php';
require 'includes/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

try {
    //Recipients
    $mail->setFrom($email, $name); // Contact form name e.g. $first_name
    $mail->addAddress('info@meliorateAfrica.com'); //Add a recipient -> Where to send the email to
    $mail->addReplyTo('info@example.com', 'Information');
    $mail->addCC('tertiussc@meliorateafrica.com', 'Tertius');

    //Content
    $mail->isHTML(true); //Set email format to HTML
    $mail->Subject = 'Message from your website MeliorateAfrica.com FROM: ' . $name;
    $mail->Body = $message . "<br> Contact number: " . $phone;
    $mail->AltBody = strip_tags($message);

    if ($mail->send()) {
        SessionMessage::set_success_messages("Your message has been sent!");
        header("Location: index.php#contact");
    };
} catch (Exception $e) {
    SessionMessage::set_alert_messages("Message was not sent!");
    header("Location: index.php#contact");
}
