<?php
    $to = "valls.raul@gmail.com";
    $subject = "Contacto via Web Solesba";

    if (isset($_POST['name'])){
        $name = $_POST['name'];
    } else $name = "No especificado";

    if (isset($_POST['tel'])){
        $tel = $_POST['tel'];
    } else $tel = "No especificado";

    if (isset($_POST['from'])){
        $from = $_POST['from'];
    } else $from = "No expecificado";

    if (isset($_POST['comments'])){
        $comments = $_POST['comments'];
    } else $comments = "Sin mensaje.";

    $headers =  'From: webmaster@solesba.com' . "\r\n" .
                'Reply-To: $from' . "\r\n" .
                'Subject: Contacto via Web Solesba.com' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();

    $msg = "Asunto: $subject \r\nDes de: $from \r\nTelefono: $tel \r\nNombre: $name \r\nMensaje: \r\n$comments";

    if (mail($to,$subject,$msg)){
        echo "Mail Sent";
    }else echo "Error!";