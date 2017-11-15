<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '192.168.0.14';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'doc@atmsa.cl';                 // SMTP username
    $mail->Password = 'Aiai9884';                           // SMTP password
    $mail->SMTPSecure = 'false';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';

    //Recipients
    $mail->setFrom('doc@atmsa.cl', 'Mailer');
    // Add a recipient
    $mail->addAddress('dveloso@atmsa.cl');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Postulación de '.$name.' '.$fecha;
<<<<<<< HEAD
    $mail->Body    =
		            '<p>Practica:  '.$practica.'<p>'.
		            '<p>Nombre:  '.$name.'<p>'.
=======
    $mail->Body    = '<p>Nombre:  '.$name.'<p>'.
>>>>>>> parent of fe8ca4f... agregadopractica al mail
                    '<p>Apellidos:  '.$apellidos.'<p>'.
                    '<p>Rut:  '.$rut.'<p>'.
                    '<p>Region:  '.$region.'<p>'.
                    '<p>Comuna:  '.$comuna.'<p>'.
                    '<p>Direccion:  '.$direccion.'<p>'.
                    '<p>Telefono:  '.$telefono.'<p>'.
                    '<p>Telefono Opcional:  '.$telefono2.'<p>'.
                    '<p>E-Mail:  '.$email.'<p>'.
                    '<p>Universidad:  '.$universidad.'<p>'.
                    '<p>Años de experiencia:  '.$añoegreso.'<p>'.
                    '<p>Enseñanza Superior:  '.$media.'<p>'.
                    '<p>Titulos:  '.$titulos.'<p>'.
                    '<p>Cursos:  '.$cursos.'<p>'.
                    '<p>Reseña Laboral:  '.$areainteres.'<p>'.
                    '<p>Especialidades:  '.$areaesp.'<p>'
    ;


    $mail->send();
} catch (Exception $e) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
