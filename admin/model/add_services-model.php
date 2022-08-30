<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-services'])) {
	
	$title = strtolower($_POST['services-title']);
	$text = $_POST['services-text'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_services = '';

	if (empty($title) || empty($text)) {
		$errors_services .= 'Por favor rellena todos los campos<br>';
	} 

	if (empty($image_name)) {
		$errors_services .= 'Por favor selecciona una imagen';
	}

	$sql = "SELECT * FROM services WHERE TITLE = :title";
	$resultado = $base->prepare($sql);
	$resultado->execute(array(':title'=>$title));

	if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
		if ($title == $registro['title']) {
			$errors_services .= 'El titulo ya existe en la base de datos';
		}
	}

	if (empty($errors_services)) {

    if ($image_size <= 1000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "INSERT INTO services (TITLE, TXT, IMG) VALUES (:title, :txt, :img)";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array(':title'=>$title,':txt'=>$text,':img'=>$image_name));
	        header("Location: index.php#services");
    	} else {
    		$errors_services .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_services .= 'La imagen es muy grande<br>';
    }
  }
}

?>