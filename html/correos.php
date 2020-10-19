<?php
    $destinatario = 'bestdental.supp@gmail.com';
    //Esto es al correo que se le enviara el mensaje

    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];
    $primeraFecha = $_POST['primeraFecha'];
    $segundaFecha = $_POST['segundaFecha'];
    $terceraFecha = $_POST['terceraFecha'];
    $hora = $_POST['hora'];
    $razonCita = $_POST['razonCita'];
    $comentarios = $_POST['comentarios'];

    $header = "Formulario (COMPLETO)";

    $mensajeCompleto = $razonCita . "\nAtentamente: " .$nombres;

    mail($destinatario, $email, $mensajeCompleto, $header);
    echo "<script>alert('Cita agendada exitosamente')</script>";
    echo "<script> setTimeout(\"location.href='formulario.html'\",1000)</script>";

?>