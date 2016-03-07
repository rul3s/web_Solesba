<?php
    $to = "valls.raul@gmail.com";
    $subject = "Contacto via Web Solesba";

    if (!empty($_POST['$name'])){
        $name = $_POST['$name'];
    } //else $name = "No especificado";

    if (!empty($_POST['$tel'])){
        $tel = $_POST['$tel'];
    } //else $tel = "No especificado";

    if (!empty($_POST['$from'])){
        $from = $_POST['$from'];
    } //else $from = "No expecificado";

    if (!empty($_POST['$comments'])){
        $comments = $_POST['$comments'];
    } //else $comments = "Sin mensaje.";

    $msg = "Des de: $from<br>Telefono: $tel<br>Nombre: $name<br> Mensaje: $comments";

    mail($to,$subject,$msg);