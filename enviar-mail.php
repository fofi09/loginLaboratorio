<?php
$de= $_POST["name"];
$para=$_POST["mail_txt"];
$asunto=$_POST["asunto"];
$mensaje=$_POST["msg"]
    
    $cabeceras = "MIME-Version: 1.0\r\n";
    $cabeceras.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $cabeceras.= "From: $de \r\n";

    if(mail($para,$asunto,$mensaje,$cabeceras)){
        $respuesta="el mensaje fue enviado";
    }
    else{
        $respuesta="no se pudo enviar el mensaje";
    }
    header("Location: formulario-mail.php?respuesta=$respuesta");
    
  ?>