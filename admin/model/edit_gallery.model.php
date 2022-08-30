<?php
require_once("conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-gallery']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
	$name = htmlentities(addslashes($_POST['name']));
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_name = '';
	$errors_gallery = '';

	if (empty($name)) {
		$errors_name = 'Por favor eliga un nombre para la imagen';
	}

    if ($image_name == '') {
    	$errors_gallery = 'Por favor seleccione una imagen';
    } else {

	if ($image_size <= 1000000) {
		if ($image_type == 'image/jpeg' || $image_type == 'image/jpg' || $image_type == 'image/png' || $image_type == 'image/gif') {
			
    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "INSERT INTO gallery (NAME, IMG) VALUES (:name, :img)";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array(':name'=>$name, ':img'=>$image_name));

		} else {
			$errors_gallery = 'Solo se admiten archivos de tipo jpeg, jpg, png o gif';
		}
	} else {
		$errors_gallery = 'La imagen es muy grande';
	}
    }
}

?>