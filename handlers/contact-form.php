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
    $mail->addAddress('szymonrykala@gmail.com', 'Szymon Rykała');     //
    $mail->smtpConnect();

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // print_r($body);
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    print_r($mail->ErrorInfo);
}


// if ($request->is_authenticated()) {
//     (new Response(200, "Email został wysłany!"))->send();
// } else {
//     (new Response(400, "Formularz nie został poprawnie zautoryzowany"))->send();
// }
