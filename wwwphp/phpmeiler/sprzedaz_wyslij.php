<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   // $mail->SMTPDebug = 1;                                 // Enable verbose debug output
   $mail->CharSet = 'UTF-8';
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.wp.pl';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'czestnet@wp.pl';                 // SMTP username
    $mail->Password = 'zxcASDqwe';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('czestnet@wp.pl', 'czestnet');
	
    $mail->addAddress('czestnet@wp.pl', 'dominik.winiarek@wp.pl');     // Add a recipient
    
    $mail->addReplyTo('dominik.winiarek@wp.pl', 'Dominik');


    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments


    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
	$html = new \Html2Text\Html2Text($mail->Body);


    $mail->AltBody = $html->getText();

    $mail->send();
    echo 'Wiadomość wysłana';
} catch (Exception $e) {
    echo 'Wiadomość nie wysłąna: ', $mail->ErrorInfo;
}