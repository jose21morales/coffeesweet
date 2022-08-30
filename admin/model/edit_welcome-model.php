<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-welcome'])) {
	
	$id = $_POST['welcome-id'];
	$title = $_POST['welcome-title'];
	$text = $_POST['welcome-txt'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_welcome = '';

	if (empty($title) || empty($text)) {
		$errors_welcome .= 'Por favor rellena todos los campos<br>';
	}

	if (empty($image_name)) {
		$errors_welcome .= 'Por favor selecciona una imagen';
	}

	if (empty($errors_welcome)) {

    if ($image_size <= 1000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';
    		
    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "UPDATE welcome SET title = '$title', txt = '$text', img = '$image_name' WHERE id = '$id'";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array());
	        header("Location: index.php#welcome");
    	} else {
    		$errors_welcome .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_welcome .= 'La imagen es muy grande<br>';
    }
  }
}

?>