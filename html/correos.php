<?php
    $destinatario = 'bestdental.supp@gmail.com';
    //Esto es al correo que se le enviara el mensaje

    $nombres = $_POST['nombres'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $primeraFecha = $_POST['primeraFecha'];
    $segundaFecha = $_POST['segundaFecha'];
    $terceraFecha = $_POST['terceraFecha'];
    $hora = $_POST['hora'];
    $razonCita = $_POST['razonCita'];
    $comentarios = $_POST['comentarios'];

    $header = 'From: ' .$email. "\r\n";
    $header .= "X-Mailer: PHP/". phpversion() . "\r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text-plain";

    $mensajeCompleto = "Este mensaje fue enviado por: " .$nombres .$apellidos . "\r\n";
    $mensajeCompleto .= "Su email es: " .$email . "\r\n";
    $mensajeCompleto .= "Telefono de contacto: " .$telefono . "\r\n";
    $mensajeCompleto .= "Su primera Fecha agendada es el: " .$primeraFecha . "\r\n";
    $mensajeCompleto .= "Su segunda Fecha agendada es el: " .$segundaFecha . "\r\n";
    $mensajeCompleto .= "Su tercera Fecha agendada es el: " .$terceraFecha . "\r\n";
    $mensajeCompleto .= "Agendo cita debido a que experimenta: " .$razonCita . "\r\n";
    $mensajeCompleto .= "Comentarios o preguntas de este paciente: " .$comentarios . "\r\n";
    $mensajeCompleto .= "Enviado el: " .date('d/m/Y', time());

    $asunto = 'Cita Agendada';

    mail($destinatario, $asunto, utf8_decode($mensajeCompleto), $header);

    header("Location:formulario.html");
?>