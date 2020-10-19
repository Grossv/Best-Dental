<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Best Dental</title>
    <link rel="stylesheet" href="../css/estiloFormulario.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <form action="correos.php" method="POST" id="form">
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
                <input type="date" name="primeraFecha" id="name" required><span class="barra"></span>
                <label for="" class="fechas">Fecha</label>
            </div>
            <div class="grupo">
                <input type="date" name="segundaFecha" id="name"><span class="barra"></span>
                <label for="" class="fechas">Segunda fecha (opcional)</label>
            </div>
            <div class="grupo">
                <input type="date" name="terceraFecha" id="name"><span class="barra"></span>
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
        </div>
    </form>
    <?php
    include("correos.php");
    ?>
    <script src="../js/mainFormulario.js"></script>
</body>
</html>