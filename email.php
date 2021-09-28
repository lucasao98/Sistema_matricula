<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$novaSenha = $_COOKIE['cod'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail = new PHPMailer();
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'Insira um email válido para ser o remetente';                     //SMTP username
    $mail->Password   = 'Insira a senha do email válido';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->SMTPSecure = 'tls';

    //Recipients
    $mail->setFrom('from@example.com', 'Insira o titulo do email');
    $mail->addAddress('Insira o destinatario do email');     //Add a recipient

    //Attachments
    #$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    #$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Recuperacao de Senha';
    $mail->Body    = '<h3>Segue sua nova senha.</h3><br/>'."<b>$novaSenha</b>";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if($mail->send()){
        header('location:sucessoemail.php');
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
