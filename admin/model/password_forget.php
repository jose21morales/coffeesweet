<?php

require_once('conectar.php');
$base = Conectar::conexion();

$msg = "";

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['btn-forget_password'])) {

    $sql = "SELECT * FROM usuarios";
    $resultado = $base->prepare($sql);
    $resultado->execute(array());

    $registro = $resultado->fetch(PDO::FETCH_ASSOC);
    $name = $registro['name'];
    $usuario = $registro['usuario'];
    $password = $registro['password'];
    $correo = $registro['mail'];

    $destinatario = "$correo";
    $asunto = "Recuperar contraseña de Coffee-Sweet";
    $headers = 'From: info@coffee-sweet.com' . "\r\n" .
    'Replay-To: info@coffee-sweet.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
    $contenido .= "Hola $name estos son tus datos \n";
    $contenido .= "Nombre: Coffee-Sweet \n";
    $contenido .= "Usuario: $usuario \n";
    $contenido .= "Password: $password \n";
    $contenido .= "Correo: $correo";

    $mail_enviado = mail($destinatario, $asunto, $contenido, $headers);
    if ($mail_enviado) {
    	$msg = "<script>alert('Se envio el password al correo con exito');</script>";
    } else {
    	$msg = "<script>alert('Error al enviar el password, por favor contacte con el desarrollador del sitio web');</script>";
    }
}

?>