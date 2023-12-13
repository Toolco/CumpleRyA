<?php
if(isset($_POST['submit'])){
    $to = "1190108@unav.edu.mx"; // Reemplaza con tu dirección de correo electrónico
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $headers = "From: $from";

    // Envío del correo
    mail($to, $subject, $message, $headers);

    // Redireccionar o mostrar un mensaje de éxito
    header('Location: gracias.html'); // Redirige a una página de agradecimiento
    exit;
}
?>