<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$comentarios = $_POST['comentarios'];

$to = $_POST['email'];
$subject = "WWWapas - Prueba de formulario";

$message = "Gracias por probar el formulario de contacto de WWWapas. Los datos ingresados fueron los siguientes: \nNombre: " . $nombre . "\nEmail: ". $email . "\nComentarios: " . $comentarios;

if($email != null) {
    if(mail($to, $subject, $message)) {
        echo 'Gracias por probar el formulario. Revise su casilla de correo.';
        header('Location: index.html');
    } else {
        echo 'Error al enviar el correo.';
    }
} else {
    echo 'El campo de email está vacío.';
}

exit();