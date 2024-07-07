<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require_once("./tools.php");
require_once("./php_mailer/PHPMailer.php");
require_once("./php_mailer/SMTP.php");
require_once("./php_mailer/Exception.php");
require_once("./email-auth.php");


if (isset($_COOKIE["MAILING_SESSION"])) {
    Session::from_session_id($_COOKIE["MAILING_SESSION"]);
}

$request = new Request();
$body = $request->body;

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Create an instance; passing `true` enables exceptions

if (!$request->is_authenticated()) {
    (new Response(400, "Formularz nie został poprawnie zautoryzowany"))->send();
}

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Host       = $HOST;

    $mail->Username   = $USER;
    $mail->Password   = $PASS;
    $mail->Port       = $PORT;

    //Recipients
    $mail->setFrom($USER, $body["firstName"] . ' ' . $body["lastName"]);

    $mail->addAddress('szymonrykala@gmail.com', 'Szymon Rykała');
    $mail->addAddress('biuro@bulerenergy.pl', 'Piotr Buler');

    $mail->smtpConnect();

    //Content
    $mail->isHTML(true);
    $mail->Subject = $body["subject"];

    $message = "Wiadomość od: " . $body['email'] . "\n\n" . $body["message"] . "\nmiasto: " . $body["city"] . "\n";
    $mail->Body = $message;


    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    $mail->send();

    (new Response(200, "Email został wysłany!"))->send();
} catch (Exception $e) {
    (new Response(500, "Formularz nie zadziałał\nNapisz do mnie na biuro@bulerenergy.pl"))->send();
}
