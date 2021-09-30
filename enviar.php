<?php
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];
    $para = "castilloaustry@gmail.com";
    $asunto = "Contacto web";
    $cuerpo = "<h1>Info recibida</h1><img src=https://www.jimdo.com/static/ab2ee7b411a610479211ac292fd89ef4/5ce94/Logo_LogoExample_Header_4_ES.png width=100px><br><br>Nombre: ".$nombre."<br>Correo: ".$correo."<br>Mensaje: ".$mensaje."<br><br>Chao!!";
    $cabecera = "From:" . $para . "\r\n";
	$cabecera.= "MIME-Version: 1.0\r\n";
	$cabecera.= "Content-Type: text/html; charset=UTF-8\r\n";
	if(mail($para,$asunto,$cuerpo,$cabecera))
        echo "Correo enviado correctamente 😁";
    else
        echo "No se puede enviar 🥴";
?>