<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-experience'])) {
	
	$id = $_POST['experience-id'];
	$title = $_POST['experience-title'];
	$text = $_POST['experience-txt'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_experience = '';

	if (empty($title) || empty($text)) {
		$errors_experience .= 'Por favor rellena todos los campos<br>';
	}

	if (empty($image_name)) {
		$errors_experience .= 'Por favor selecciona una imagen';
	} 

	if (empty($errors_experience)) {

    if ($image_size <= 20000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "UPDATE experience SET title = '$title', txt = '$text', img = '$image_name' WHERE id = '$id'";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array());
	        header("Location: index.php#experience");
    	} else {
    		$errors_experience .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_experience .= 'La imagen es muy grande<br>';
    }
  }
}

?>