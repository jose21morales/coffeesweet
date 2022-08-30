<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (!isset($_POST['btn-banner'])) {
	
} else {
	$title = $_POST['banner-title'];
	$text = $_POST['banner-txt'];

	$sql = "UPDATE banner SET title = '$title', txt = '$text' WHERE id = 1";
	$resultado = $base->prepare($sql);
	$resultado->execute(array());
	header("Location: index.php");
}

?>