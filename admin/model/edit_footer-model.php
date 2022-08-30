<?php

require_once("conectar.php");
$base = Conectar::conexion();

if (!isset($_POST['btn-footer'])) {
	
} else {
	$id = $_POST['id'];
	$description = $_POST['description'];
	$place = $_POST['place'];
	$phone = $_POST['phone'];
	$mail = $_POST['mail'];
	$facebook = $_POST['facebook'];
	$instagram = $_POST['instagram'];
	$twitter = $_POST['twitter'];

	$sql = "UPDATE footer SET description = '$description', place = '$place', phone = '$phone', mail = '$mail', facebook = '$facebook', instagram = '$instagram', twitter = '$twitter' WHERE id = '$id'";
	$resultado = $base->prepare($sql);
	$resultado->execute(array());
	header("Location: index.php#footer");
}

?>