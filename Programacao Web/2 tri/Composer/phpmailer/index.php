<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once("Vendor/autoload.php");

$mail = new PHPMailer();

try {

    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "mail.eduardoschenato.com.br";
    $mail->Username = "aulaifrs@eduardoschenato.com.br";
    $mail->Password = "&Et]DNIY1q1#asd$58D";
    $mail->SMTPSecure = "ssl";
    $mail->Port = 465;

    $mail->setFrom("aulaifrs@eduardoschenato.com.br", "Aula IFRS");
    $mail->addAddress("nicki.valca10@gmail.com", "Nícolas Valcarenghi");
    $mail->isHTML(true);
    $mail->Subject = "Timbal";
    $mail->Body = "<h1>Xereca</h1><p>Pinto</p>";
    $mail->AltBody = "Mensagem alternativa";

    $mail->send();

    echo"Mensagem enviada";

} catch(Exception $e) {

}
