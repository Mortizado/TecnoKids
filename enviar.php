<?php 

$correo = $_POST['correo'];
$nombre = $_POST['nombre'];
$mensaje = $_POST['mensaje'];
$asuntos = $_POST['asunto'];

//echo $correo . " " . $nombre . " " . $mensaje;


$destinatario = "estebansaul95@gmail.com";
$asunto =  "$asuntos";
$cuerpo = '
    <html> 
        <head> 
            <title>Prueba de envio de correo</title> 
        </head>

        <body> 
            <h1> Solicitud de contacto desde la web  </h1>
            <p> 
                Contacto:  '.$nombre . ' - ' . $asunto .'  <br>
                Mensaje: '.$mensaje.' 
            </p> 
        </body>
    </html>
';
//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=UTF8\r\n"; 

//dirección del remitente

$headers .= "FROM: $nombre <$correo>\r\n";
mail($destinatario,$asunto,$cuerpo,$headers);

echo "Correo enviado"; 
?> 

<a href="index.html">Volver a inicio</a>