<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';


    $data = array();
    $errors = array();

    if (empty($_POST["name"])) {
        $errors["name"] = "Name is required";
    }

    if (empty($_POST["email"])){
        $errors["email"] = "Email is required";
    }

    if (empty($_POST["message"])){
        $errors["message"] = "Message is required";
    }

    if (! empty($errors)){
        $data["success"] = false;
        $data["errors"] = $errors;
    } else {
        $data['success'] = true;
        $data['name'] = $name;
        $data['email'] = $email;
        $data['subject'] = $subject;
        $data['message'] = $message;



    }



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
//try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->CharSet = 'UTF-8';

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = '192.168.0.14';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'doc@atmsa.cl';                 // SMTP username
    $mail->Password = 'Aiai9884';                           // SMTP password
    $mail->SMTPSecure = 'true';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 25;                                    // TCP port to connect to


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
    $mail->Body    =
		            '<p>Practica:  '.$practica.'<p>'.
		            '<p>Nombre:  '.$name.'<p>'.
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
                    '<p>Otros Estudios:  '.$media.'<p>'.
                    '<p>Titulos:  '.$titulos.'<p>'.
                    '<p>Cursos:  '.$cursos.'<p>'.
                    '<p>Reseña Laboral:  '.$areainteres.'<p>'.
                    '<p>Especialidades:  '.$areaesp.'<p>'
    ;

    if(!$mail->send()) {
       $data['error']['title'] = 'Message could not be sent.';
       $data['error']['details'] = 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }
