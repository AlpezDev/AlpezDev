<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $asunto = "Suscripci�n al bolet�n";
    $mensaje = "�Hola!\n\nMe gustar�a suscribirme a tu bolet�n para recibir actualizaciones y noticias sobre tu trabajo.\n\n�Gracias!";

    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail("alpezdev@gmail.com", $asunto, $mensaje, $headers)) {
        echo "Correo electr�nico enviado con �xito.";
    } else {
        echo "Error al enviar el correo electr�nico.";
    }
}
?>