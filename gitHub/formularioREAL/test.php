<?php

/*ESTE ES EL ENVIADOR DE MAIL*/



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



$mail = new PHPMailer(true);

    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';

    $mail->isSMTP();
    $mail->Host = '192.168.0.14';
    $mail->SMTPAuth = true;
    $mail->Username = 'doc@atmsa.cl';
    $mail->Password = 'Aiai9884';
    $mail->SMTPSecure = 'true';
    $mail->Port = 25;

    //ESTE ES EL QUE  ENVÍA EL MAIL
    $mail->setFrom('doc@atmsa.cl', 'Mailer');
    // ESTE ES EL QUE RECIBE EL MAIL
    $mail->addAddress('dveloso@atmsa.cl');

  // SI QUIEREN QUE AGREGUE COPIAS, DEBEN DESCOMENTAR ESTA ZONA

     /*$mail->addCC('vortiz@atmsa.cl');
     $mail->addCC('gespejo@atmsa.cl');
     */$mail->addCC('marancibia@atmsa.cl');
     $mail->addCC('aarancibia@atmsa.cl');

    // $mail->addBCC('bcc@example.com');

    //ESTA ES LA PARTE DE LOS ADJUNTOS. SI DESEAN AGREWGAR UN ARCHIVO ADJUNTO DEBEN DESCOMENTAR AQUÍ

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //CUERPO DEL Mail


    $mail->isHTML(true);                                  // Set email format to HTML
    if($practica==="Practicante"){
      $mail->Subject = 'Postulación a Práctica de '.$name.' '.$fecha;

    }
    else{
    $mail->Subject = 'Postulación de '.$name.' '.$fecha;
    }
    $mail->Body    =
		            '<p>Tipo de Postulación:  '.$practica.'<p>'.
		            '<p>Nombre:  '.$name.'<p>'.
                    '<p>Apellidos:  '.$apellidos.'<p>'.
                    '<p>E-Mail:  '.$email.'<p>'.
                    '<p>Titulos:  '.$titulos.'<p>'.
                    '<p>Especialidades:  '.$areaesp.'<p>'
    ;

    if(!$mail->send()) {
       $data['error']['title'] = 'Message could not be sent.';
       $data['error']['details'] = 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }
