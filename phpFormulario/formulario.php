<?php
$result="";
if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='bestdental.supp@gmail.com';
    $mail->Password='Chococrispy747.';

    $mail->setFrom($_POST['email'],$_POST['nombres']);
    $mail->addAddress('bestdental.supp@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['nombres']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['email'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['nombres'].$_POST['apellidos'].'<br>Email: '.$_POST['email'].'<br>Telefono: '.$_POST['telefono'].'<br>Fecha de cita: '.$_POST['primeraFecha'].'<br>Fecha secundaria para cita: '.$_POST['segundaFecha'].'<br>Ultima opcion para cita: '.$_POST['terceraFecha'].'<br>Hora: '.$_POST['hora'].'<br>Razon de la cita: '.$_POST['razonCita'].'<br>Comentarios y preguntas del paciente: '.$_POST['comentarios'].'</h1>';

    if(!$mail->send()){
    $result="Algo anda mal :(  intentelo de nuevo por favor";
    }
    else
    {
    $result="Gracias".$_POST['nombres']."por agendar tu cita, pronto nos contactaremos para confirmar tu cita!";
    }
}
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Best Dental</title>
    <link rel="stylesheet" href="css/estiloFormulario.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="" method="post" id="form">
        <div class="form">
            <h1>Registro</h1>
            <h3 class="subtitulo">Información de contacto</h3>

            <div class="grupo">
                <input type="text" name="nombres" id="name" required><span class="barra"></span>
                <label for="">Nombres</label>
            </div>
            <div class="grupo">
                <input type="text" name="apellidos" id="name" required><span class="barra"></span>
                <label for="">Apellido</label>
            </div>
            <div class="grupo">
                <input type="text" name="telefono" id="name" required><span class="barra"></span>
                <label for="">Telefono</label>
            </div>
            <div class="grupo">
                <input type="email" name="email" id="name" required><span class="barra"></span>
                <label for="">Email</label>
            </div>

            <h3>Detalles de la cita</h3>

            <div class="grupo">
                <input type="date" name="primeraFecha" id="primeraFecha" required><span class="barra"></span>
                <label for="" class="fechas">Fecha</label>
            </div>
            <div class="grupo">
                <input type="date" name="segundaFecha" id="segundaFecha"><span class="barra"></span>
                <label for="" class="fechas">Segunda fecha (opcional)</label>
            </div>
            <div class="grupo">
                <input type="date" name="terceraFecha" id="terceraFecha"><span class="barra"></span>
                <label for="" class="fechas">Tercera Fecha (opcional)</label>
            </div>
            <div class="grupo">
                <select name="hora" id="horadisponible">
                    <option value="">9:00am</option>
                    <option value="">10:00am</option>
                    <option value="">11:00am</option>
                    <option value="">1:00pm</option>
                    <option value="">2:00pm</option>
                    <option value="">3:00pm</option>
                    <option value="">4:00pm</option>
                </select>
                <label for="" class="agregadas">Hora</label>
            </div>
            <div class="grupo">
                <select name="razonCita" id="feedback-customer">
                    <option value="">Diente quebrado</option>
                    <option value="">Chequeo y limpieza</option>
                    <option value="">Consulta general</option>
                    <option value="">Dolor en la articulación de la mandíbula (TMJ)</option>
                    <option value="">Segunda opinión</option>
                    <option value="">Blanqueamiento dental</option>
                    <option value="">Dolor de muelas</option>
                    <option value="">Carillas</option>
                </select>
                <label for="" class="agregadas">Estoy haciendo una cita para</label>
            </div>
            <div class="grupo">
                <textarea name="comentarios" id="comentarios" style="resize: none" placeholder="No ingrese ninguna información médica protegida (PHI)" cols="30" rows="5"></textarea>
                <label for="" class="agregadas">Comentarios y Preguntas</label>
            </div>
            <button type="submit">Enviar</button>
            <h5 class="notifCorrecto"> <?= $result; ?></h5>
        </div>
    </form>
</body>
</html>