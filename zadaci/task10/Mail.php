<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class Mail
{
    /**
     * @param string $subject
     * @param $to
     * @param $text
     * @param $file
     */
    public static function sendMail(string $subject, $to, $text, $file,$cc,$bcc)
    {
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host = 'mail.lv.stud.vts.su.ac.rs';                                         //Set the SMTP server to send through
            $mail->SMTPAuth = true;                                  //Enable SMTP authentication
            $mail->Username = 'lv';                     //SMTP username
            $mail->Password = 'wIAommKIogQGj3Y';                               //SMTP password
            $mail->SMTPSecure = "tls";            //Enable implicit TLS encryption
            $mail->Port = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('lv@lv.stud.vts.su.ac.rs', 'Mailer');
            $mail->addAddress($to, 'Joe User');     //Add a recipient
            $mail->addReplyTo('info@example.com', 'Information');
            !empty($cc) ? $mail->addCC($cc): $mail->addCC('bogus@example.com') ;
            !empty($bcc) ? $mail->addBCC($bcc): $mail->addBCC('bogus@example.com') ;

            //Attachments
            if (!empty($file)) {
                $mail->addAttachment($file);         //Add attachments
            }
            // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $subject;
            $mail->Body = $text;
            $mail->AltBody = $text;

            $mail->send();
            return true;
        } catch (Exception $e) {
            return $e;
        }

    }
}