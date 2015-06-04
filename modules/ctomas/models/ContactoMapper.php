<?php
class ContactoMapper
{
    function sendMensaje()
    {
        header("Content-type: text/html; charset=utf8");
        $nombre = $_POST['nombre'];
        $email = $_POST['correo'];
        $asunto = $_POST['asunto'];
        $mensaje = $_POST['mensaje'];
        $para = 'ctmdesarrollo@gmail.com'; 

        $header = 'From: ' . $email;
        $msjCorreo = 'Nombre: ' .$nombre.'\n E-Mail: '. $email.'\n Mensaje:\n'. $mensaje;

        if ($_POST['submit']) {
            
            if (mail($para, $asunto, utf8_decode($msjCorreo), $header)) {
                echo "<script language='javascript'>
                alert('Mensaje enviado, muchas gracias.');
                window.location.href = 'http://miweb.local/contacto';
                </script>";
            } else {
                echo 'Fallo en el envio';
            }
        }
    }
}
