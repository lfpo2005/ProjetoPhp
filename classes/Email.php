<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require 'vendor/autoload.php';

    class Email{

        function __construct(){

            $mail = new PHPMailer();
              
            try {
             //Server settings
             //Server settings
             $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    // Enable verbose debug output
             $mail->isSMTP();                                          // Send using SMTP
             $mail->Host       = 'br174.hostgator.com.br';             // Set the SMTP server to send through
             $mail->SMTPAuth   = true;                                 // Enable SMTP authentication
             $mail->Username   = 'contato@lfcode.com.br';              // SMTP username
             $mail->Password   = '@Lfpo197197';                        // SMTP password
             $mail->SMTPSecure = 'ssl';                                // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
             $mail->Port       = 465;                                 // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
         
             //Recipients
             $mail->setFrom('contato@lfcode.com.br', 'Becas para Batismo');
             $mail->addAddress('lfpo2005@yahoo.com.br', 'lfpo');     // Add a recipient
            // $mail->addReplyTo('info@example.com', 'Information');
            // $mail->addCC('cc@example.com');
            // $mail->addBCC('bcc@example.com');
         
             // Attachments
            // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
         
             // Content
             $mail->isHTML(true);                                  // Set email format to HTML
             $mail->Subject = 'teste Email';
             $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
             $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
         
             $mail->send();
             echo 'Message has been sent';
         } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }
             }
    }
?>