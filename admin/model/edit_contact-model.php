<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (!isset($_POST['btn-contact_us'])) {
	
} else {
	$id = $_POST['id'];
	$title = $_POST['title'];
	$description = $_POST['description'];
	$phone = $_POST['phone'];
	$whatsapp = $_POST['whatsapp'];
	$mail = $_POST['mail'];

	$sql = "UPDATE contact_us SET title = '$title', description = '$description', phone = '$phone', whatsapp = '$whatsapp', mail = '$mail' WHERE id = '$id'";
	$resultado = $base->prepare($sql);
	$resultado->execute(array());
	header("Location: index.php#contact-us");
}

?>