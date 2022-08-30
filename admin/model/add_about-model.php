<?php

require_once("model/conectar.php");
$base = Conectar::conexion();

if (isset($_POST['btn-about'])) {
	
	$name = strtolower($_POST['name']);
	$description = $_POST['description'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];

	$errors_about = '';

    if (empty($name) || empty($description)) {
        $errors_about = 'Por favor rellena todos los campos<br>';
    } 
    
    if (empty($image_name)) {
        $errors_about .= 'Por favor selecciona una imagen';
    }

    $sql = "SELECT * FROM about WHERE NAME = :name";
    $resultado = $base->prepare($sql);
    $resultado->execute(array(':name'=>$name));

    if ($registro = $resultado->fetch(PDO::FETCH_ASSOC)) {
        if ($name == $registro['name']) {
            $errors_about .= 'El nombre ya existe en la base de datos';
        }
    }

    if (empty($errors_about)) {

    if ($image_size <= 1000000) {
    	if ($image_type == 'image/jpg' || $image_type == 'image/jpeg' || $image_type == 'image/png' || $image_type == 'image/gif') {

    		$carpeta_destino_client = $_SERVER['DOCUMENT_ROOT'] . '/Cafeteria/img/';

    		move_uploaded_file($_FILES['image']['tmp_name'], $carpeta_destino_client . $image_name);

	        $sql = "INSERT INTO about (NAME, DESCRIPTION, IMG) VALUES (:name, :description, :img)";
	        $resultado = $base->prepare($sql);
	        $resultado->execute(array(':name'=>$name,':description'=>$description,':img'=>$image_name));
	        header("Location: index.php#about");
    	} else {
    		$errors_about .= 'Solo se admiten imagenes de tipo jpg, jpeg, png o gif';
    	}
    } else {
    	$errors_about .= 'La imagen es muy grande<br>';
    }
  }
}

?>